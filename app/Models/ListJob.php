<?php

namespace App\Models;

class ListJob {
    public static function all(){
        return [
            [
                "title" => "Software Engineer",
                "tasks" => [
                    "Design and develop software applications.",
                    "Collaborate with cross-functional teams.",
                    "Write clean and efficient code."
                ]
            ],
            [
                "title" => "Web Developer",
                "tasks" => [
                    "Create and maintain websites.",
                    "Ensure website functionality and performance.",
                    "Optimize web applications for speed and scalability."
                ]
            ],
            [
                "title" => "Database Administrator",
                "tasks" => [
                    "Manage and maintain database systems.",
                    "Ensure data security and integrity.",
                    "Perform database backups and recovery."
                ]
            ]
        ];
    }
}
