<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Product Management';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Product')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Basic Information')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                // after blur this input
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->unique(ignorable: fn($record) => $record),
                            Forms\Components\TextInput::make('sku')
                                ->required()
                                ->unique(ignorable: fn($record) => $record),
                            Forms\Components\RichEditor::make('description')
                                ->required()
                                ->columnSpan('full'),

                            Forms\Components\RichEditor::make('mini_description')
                                ->required()
                                ->columnSpan('full'),
                            Forms\Components\Select::make('status')
                                ->options([
                                    'draft' => 'Draft',
                                    'published' => 'Published',
                                    'archived' => 'Archived',
                                ])
                                ->default('draft')
                                ->required(),
                        ])->columns(2),

                    Forms\Components\Tabs\Tab::make('Pricing & Inventory')
                        ->schema([
                            Forms\Components\TextInput::make('price')
                                ->numeric()
                                ->required()
                                ->live(onBlur: true)
                                ->prefix('$')
                                ->afterStateUpdated(fn($state, callable $set) => $set('max_price', $state * 3)),
                            Forms\Components\TextInput::make('sale_price')
                                ->numeric()
                                ->prefix('$'),
                            Forms\Components\TextInput::make('max_price')
                                ->numeric()
                                ->prefix('$'),
                            Forms\Components\TextInput::make('stock')
                                ->numeric()
                                ->default(0)
                                ->required(),
                            Forms\Components\Select::make('tax_class')
                                ->options([
                                    'standard' => 'Standard',
                                    'reduced' => 'Reduced',
                                    'zero' => 'Zero',
                                ])
                                ->default('standard')
                                ->required(),
                        ])->columns(2),

                    Forms\Components\Tabs\Tab::make('Media')
                        ->schema([
                            Forms\Components\FileUpload::make('product_images')
                                ->image()
                                ->multiple()
                                ->directory('products')
                                ->enableReordering()
                                ->maxFiles(5)
                                ->columnSpan('full')
                                ->saveRelationshipsUsing(function ($component, $state, $record) {

                                    foreach ($state as $filePath) {
                                        info($filePath);
                                        $record->images()->create([
                                            'product_id' => $record->id,
                                            'image' => $filePath,
                                            'is_default' => false
                                        ]);
                                    }
                                }),
                        ]),

                    Forms\Components\Tabs\Tab::make('Categories & Features')
                        ->schema([
                            Forms\Components\Select::make('categories')
                                ->multiple()
                                ->relationship('categories', 'name')
                                ->preload()
                                ->required(),
                            Forms\Components\Toggle::make('featured')
                                ->default(false),
                        ]),

                    Forms\Components\Tabs\Tab::make('SEO')
                        ->schema([
                            Forms\Components\TextInput::make('meta_title'),
                            Forms\Components\Textarea::make('meta_description')
                                ->rows(3),
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tax_class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
