<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Content')->schema([
                    Forms\Components\TextInput::make('title')->live()->required(),
                    Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                    Forms\Components\Textarea::make('body')->required(),
                ]),
                Forms\Components\Section::make('Meta')->schema([
                    Forms\Components\FileUpload::make('image')->image()->directory('blogs/thumbnails'),
                    Forms\Components\DateTimePicker::make('published_at')->nullable(),
                    Forms\Components\Checkbox::make('featured'),
                    Forms\Components\Select::make('user_id')->relationship('author', 'name')->searchable()->required(),
                    Forms\Components\Select::make('articles')->multiple()->relationship('articles', 'title')->searchable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('author.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('published_at')->date('Y-m-d')->sortable()->searchable(),
                Tables\Columns\CheckboxColumn::make('featured'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
