<?php

titulospace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        DB::table('courses')->insert([
            'titulo' => 'Curso de Estrategias para Aprender en Línea Efectivamente',
            'contenido' => 'Te enseñará cómo debes aprender de manera efectiva y eficaz para que tu carrera profesional crezca de una manera que no te habías imaginado. Es el curso que creemos todos los estudiantes deben tomar al iniciar con su ruta de aprendizaje.',
            'price' => 100,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Prework: Configuración de Entorno de Desarrollo',
            'contenido' => 'Tanto para Windows y macOS, este curso te guiará en todos los pasos que necesitas hacer para configurar tu entorno de desarrollo de la manera adecuada y puedas comenzar sin tantos problemas en el mundo de la programación.',
            'price' => 150,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Introducción al Marketing Digital',
            'contenido' => 'Si te llama la atención un poco el marketing este es el curso que va a satisfacer tu curiosidad porque cubre todo lo que necesitas saber. Es solo la punta del iceberg, pero es perfecto para que te decidas si quieres continuar o no aprendiendo sobre esta interesante área de tecnología.',
            'price' => 200,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de HTML y CSS',
            'contenido' => 'En este curso aprenderás por fin todo sobre HTML y CSS, importantísimo para empezar tu carrera como desarrolladora frontend e incluso si te vas por el camino de backend o por móviles también vas a necesitar este curso.
            Mucho de nuestros estudiantes que toman este curso también suelen tomar el Curso Práctico de HTML y CSS',
            'price' => 300,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Gestión Efectiva del Tiempo',
            'contenido' => 'Este es el curso que necesitas si eres de las personas que dice esa frase. Todos tenemos la misma cantidad de tiempo y lo único que necesitas es organizarte de manera efectiva para que puedas cumplir con todo lo que necesitas. Vamos, incluso agendarte un poco de tiempo libre con tus amigos o para leer algo.',
            'price' => 100,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Fundamentos de Ingeniería de Software',
            'contenido' => 'En este punto me siento como niña en dulcería. A pesar de que nunca estudié ingeniería, siempre me sentí cercana a la tecnología, la electrónica y la computación. Este curso es algo que me faltaba aprender: conocer cómo funciona realmente un sitio web, un sistema operativo o una memoria RAM, diferenciar Bits y Bytes y usar árboles binarios en algoritmos de compresión .zip. Una excusa para enamorarse de lo que más nos gusta a los geeks: entender cómo funcionan las cosas.',
            'price' => 300,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso Básico de JavaScript',
            'contenido' => 'JavaScript es uno de los lenguajes más populares en el mundo de la programación y parece que cada vez crece más, además es la razón por la que en este momento tenemos escuelas de diferentes áreas gracias a nuestra primera Escuela de JS presencial.',
            'price' => 130,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Meditación para Seguir Aprendiendo',
            'contenido' => 'Meditar cuenta con muchos beneficios físicos, entre ellos la mejora de la capacidad pulmonar, el desempeño cardiaco, reduce los estados de presión arterial altos. A nivel emocional, fortalece nuestra resiliencia, ayuda con la ansiedad, nos ayuda a tener un mejor manejo de nuestras vidas en situaciones de estrés y nos regala la satisfacción interna.',
            'price' => 50,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Básico Python',
            'contenido' => 'Python es el lenguaje por excelencia para empezar en el mundo de la programación, tiene un a sintaxis muy limpia y sencilla para no estresarse mucho por punto y comas faltantes en alguna línea.
            Este curso te enseñará lo básico para empezar en programación y en este lenguaje.',
            'price' => 350,
        ]);
        DB::table('courses')->insert([
            'titulo' => 'Curso de Fundamentos de Publicidad y Pauta Digital',
            'contenido' => 'La publicidad digital ha venido a revolucionar el marketing y es que los usuarios actualmente viven mucho más en internet por lo que hace más sencillo medir y analizar cómo le fue una pauta una vez fue lanzada cosa que no pasa en la publicidad tradicional.',
            'price' => 50,
        ]);
    }
}
