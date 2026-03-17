<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                FileUpload::make('featured_image')
                    ->image()
                    ->required(),
                TextInput::make('description')
                    ->required(),
                MarkdownEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
