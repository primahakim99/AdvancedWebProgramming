<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::Create([
            'title' => 'Luxury Spa',
            'category' => 'resort_overview',
            'slug' => 'luxury-spa',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos at officiis placeat similique voluptatem animi ullam temporibus obcaecati quos aut culpa veritatis magnam cumque, nobis molestiae laudantium nihil, natus voluptates sequi impedit! Molestias porro culpa ex qui quisquam aliquam ducimus quidem </p><p>odit dolor itaque cumque, nam perspiciatis, officiis totam rem perferendis expedita. Ullam ab ad eum laborum facere odio nulla, aut dolorem adipisci distinctio explicabo, non eligendi mollitia, provident nesciunt neque voluptates. Consectetur, aspernatur provident quas quaerat nesciunt expedita ea explicabo ipsum, eaque officiis cumque nemo velit ipsa est quod nihil blanditiis quis quos. Dicta velit dolore repudiandae error rem?</p>',
            'image' => 'assets/images/category1.png'
        ]);

        Post::Create([
            'title' => 'Beatusish Ingl',
            'category' => 'resort_overview',
            'slug' => 'beatusish-ingl',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos at officiis placeat similique voluptatem animi ullam temporibus obcaecati quos aut culpa veritatis magnam cumque, nobis molestiae laudantium nihil, natus voluptates sequi impedit! Molestias porro culpa ex qui quisquam aliquam ducimus quidem </p><p>odit dolor itaque cumque, nam perspiciatis, officiis totam rem perferendis expedita. Ullam ab ad eum laborum facere odio nulla, aut dolorem adipisci distinctio explicabo, non eligendi mollitia, provident nesciunt neque voluptates. Consectetur, aspernatur provident quas quaerat nesciunt expedita ea explicabo ipsum, eaque officiis cumque nemo velit ipsa est quod nihil blanditiis quis quos. Dicta velit dolore repudiandae error rem?</p>',
            'image' => 'assets/images/category2.png'
        ]);

        Post::Create([
            'title' => 'Luxury Room',
            'category' => 'resort_overview',
            'slug' => 'luxury-room',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos at officiis placeat similique voluptatem animi ullam temporibus obcaecati quos aut culpa veritatis magnam cumque, nobis molestiae laudantium nihil, natus voluptates sequi impedit! Molestias porro culpa ex qui quisquam aliquam ducimus quidem </p><p>odit dolor itaque cumque, nam perspiciatis, officiis totam rem perferendis expedita. Ullam ab ad eum laborum facere odio nulla, aut dolorem adipisci distinctio explicabo, non eligendi mollitia, provident nesciunt neque voluptates. Consectetur, aspernatur provident quas quaerat nesciunt expedita ea explicabo ipsum, eaque officiis cumque nemo velit ipsa est quod nihil blanditiis quis quos. Dicta velit dolore repudiandae error rem?</p>',
            'image' => 'assets/images/category3.png'
        ]);

        Post::Create([
            'title' => 'Heaven Seanery',
            'category' => 'resort_overview',
            'slug' => 'heaven-seanery',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos at officiis placeat similique voluptatem animi ullam temporibus obcaecati quos aut culpa veritatis magnam cumque, nobis molestiae laudantium nihil, natus voluptates sequi impedit! Molestias porro culpa ex qui quisquam aliquam ducimus quidem </p><p>odit dolor itaque cumque, nam perspiciatis, officiis totam rem perferendis expedita. Ullam ab ad eum laborum facere odio nulla, aut dolorem adipisci distinctio explicabo, non eligendi mollitia, provident nesciunt neque voluptates. Consectetur, aspernatur provident quas quaerat nesciunt expedita ea explicabo ipsum, eaque officiis cumque nemo velit ipsa est quod nihil blanditiis quis quos. Dicta velit dolore repudiandae error rem?</p>',
            'image' => 'assets/images/category4.png'
        ]);

        Post::Create([
            'title' => 'Walter Hucko',
            'category' => 'blog_slider',
            'slug' => 'walter-hucko',
            'excerpt' => 'Satisfied Customer',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>',
            'image' => 'assets/images/client1.png'
        ]);

        Post::Create([
            'title' => 'Jules Boutin',
            'category' => 'blog_slider',
            'slug' => 'Jules-boutin',
            'excerpt' => 'Satisfied Customer',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>',
            'image' => 'assets/images/client2.png'
        ]);

        Post::Create([
            'title' => 'Attilio Marzi',
            'category' => 'blog_slider',
            'slug' => 'attilio-marzi',
            'excerpt' => 'Satisfied Customer',
            'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>',
            'image' => 'assets/images/client3.png'
        ]);

        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet',
            'category' => 'blog_block',
            'slug' => 'blog-1',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>',
            'image' => 'assets/images/blog1.png'
        ]);

        Post::Create([
            'title' => 'Lorem ipsum dolor sit amet',
            'category' => 'blog_block',
            'slug' => 'blog-2',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>',
            'image' => 'assets/images/blog2.png'
        ]);
    }
}
