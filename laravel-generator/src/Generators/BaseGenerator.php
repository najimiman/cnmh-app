<?php

namespace InfyOm\Generator\Generators;
use Illuminate\Support\Str;
use InfyOm\Generator\Common\GeneratorConfig;

class BaseGenerator
{
    public GeneratorConfig $config;

    public string $path;

    public function __construct()
    {
        $this->config = app(GeneratorConfig::class);
    }

    public function rollbackFile($path, $fileName): bool
    {
        if (file_exists($path.$fileName)) {
            return g_filesystem()->deleteFile($path, $fileName);
        }

        return false;
    }

    public function variables(): array
    {
        return [];
    }

    /**
     * Création de fichier deux fois
     * - dans le dossier _Compoenets
     * - et dans le projet si le fichier n'existe pas 
     */
    public function createComponentAndFileIfNotExist ($path, $fileName,$templateData){

        $component_path = $path;
        $project_path = Str::replace("_component","",$path);

        $fileInComponent =  $component_path.$fileName;
        $fileInProject =  $project_path.$fileName;

        $this->info("createComponentAndFileIfNotExist $fileInComponent : ". $fileInComponent );
        $this->info("createComponentAndFileIfNotExist $fileInProject : ". $fileInProject );
        dd($fileInComponent);
        var_dump($fileInComponent);


        g_filesystem()->createFile($fileInComponent, $templateData);

        // Create file in project if not exist
        if(!file_exists($fileInProject)) {
            g_filesystem()->createFile($fileInProject, $templateData);
            $this->config->commandComment(infy_nl().'Create note exist file : ');
            $this->config->commandInfo($fileInProject);
        } 
    }
}
