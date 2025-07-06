<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Article;
use Illuminate\Support\Facades\File;

class ImportArticles extends Command
{

    protected $signature = 'import:articles';
    protected $description = 'Importar arquivos .txt de matérias para o banco de dados';

    public function handle()
    {
        $folder = storage_path('articles');

        if (!File::exists($folder)) {
            $this->error("Pasta storage/articles/ não encontrada.");
            return;
        }

        $files = File::files($folder);

        foreach ($files as $file) {
            if ($file->getExtension() !== 'txt') continue;

            $rawContent = trim(File::get($file));
            $lines = preg_split('/\r\n|\r|\n/', $rawContent);

            $title = null;
            $subtitle = null;
            $contentStartIndex = 0;

            // Captura title: e subtitle:
            foreach ($lines as $index => $line) {
                if (Str::startsWith($line, 'title:')) {
                    $title = trim(Str::after($line, 'title:'));
                } elseif (Str::startsWith($line, 'subtitle:')) {
                    $subtitle = trim(Str::after($line, 'subtitle:'));
                } elseif (trim($line) === '---') {
                    $contentStartIndex = $index + 1;
                    break;
                }
            }

            // Se não achou título, usa nome do arquivo
            $filename = $file->getFilenameWithoutExtension();
            $slug = Str::slug($filename);
            $title = $title ?? Str::headline($filename);

            $content = implode("\n\n", array_slice($lines, $contentStartIndex));

            // Verifica se já existe
            if (Article::where('slug', $slug)->exists()) {
                $this->warn("Matéria '$slug' já existe. Pulando.");
                continue;
            }

            Article::create([
                'title' => $title,
                'slug' => $slug,
                'subtitle' => $subtitle,
                'excerpt'  => $content,
                'content' => $content,

            ]);

            $this->info("Matéria '$title' importada com sucesso!");
        }
    }
}

