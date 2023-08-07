<?php

namespace App\Tests;

use App\Entity\Comment;
use App\Entity\BlogPost;
use App\Entity\Paint;
use PHPUnit\Framework\TestCase;

class CommentUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $comment = new Comment();
        $blogpost = new BlogPost();
        $paint = new Paint();

        $comment
            ->setAuthor('author')
            ->setEmail('email')
            ->setContent('content')
            ->setBlogPost($blogpost)
            ->setPaint($paint);

        $this->assertTrue($comment->getAuthor() === 'author');
        $this->assertTrue($comment->getContent() === 'content');
        $this->assertTrue($comment->getBlogPost() === $blogpost);
        $this->assertTrue($comment->getPaint() === $paint);
    }

    public function testIsFalse() {
        $comment = new Comment();
        $blogpost = new BlogPost();
        $paint = new Paint();

        $comment
            ->setAuthor('author')
            ->setEmail('email')
            ->setContent('content')
            ->setBlogPost($blogpost)
            ->setPaint($paint);

        $this->assertFalse($comment->getAuthor() === 'falseAuthor');
        $this->assertFalse($comment->getContent() === 'falseContent');
        $this->assertFalse($comment->getBlogPost() === new BlogPost());
        $this->assertFalse($comment->getPaint() === new Paint());
    }

    public function testIsEmpty(): void
    {
        $comment = new Comment();

        $this->assertEmpty($comment->getAuthor());
        $this->assertEmpty($comment->getContent());
        $this->assertEmpty($comment->getBlogPost());
        $this->assertEmpty($comment->getPaint());
    }
}
