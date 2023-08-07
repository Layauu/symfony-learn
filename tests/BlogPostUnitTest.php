<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $blogpost = new BlogPost();
        $user = new User();

        $blogpost
            ->setTitle('title')
            ->setContent('content')
            ->setSlug('slug')
            ->setAuthor($user);

        $this->assertTrue($blogpost->getTitle() === 'title');
        $this->assertTrue($blogpost->getContent() === 'content');
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getAuthor() === $user);
    }

    public function testIsFalse() {
        $blogpost = new BlogPost();
        $user = new User();

        $blogpost
            ->setTitle('title')
            ->setContent('content')
            ->setSlug('slug')
            ->setAuthor($user);

        $this->assertFalse($blogpost->getTitle() === 'falseTitle');
        $this->assertFalse($blogpost->getContent() === 'falseContent');
        $this->assertFalse($blogpost->getSlug() === 'falseSlug');
        $this->assertFalse($blogpost->getAuthor() === new User());
    }

    public function testIsEmpty(): void
    {
        $blogpost = new BlogPost();

        $this->assertEmpty($blogpost->getTitle());
        $this->assertEmpty($blogpost->getContent());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getAuthor());
    }
}
