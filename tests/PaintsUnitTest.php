<?php

namespace App\Tests;

use App\Entity\Paint;
use App\Entity\User;
use App\Entity\Category;
use DateTime;

use PHPUnit\Framework\TestCase;

class PaintsUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $paint = new Paint();
        $date = new DateTime();
        $user = new User();
        $category = new Category();

        $paint
             ->setName('name')
             ->setSellable(true)
             ->setRealisationDate($date)
             ->setCreatedAt($date)
             ->setDescription('description')
             ->setPortfolio(true)
             ->setSlug('slug')
             ->setFilePath('filePath')
             ->setPainter($user)
             ->addCategory($category);

        $this->assertTrue($paint->getName() === 'name');
        $this->assertTrue($paint->isSellable() === true);
        $this->assertTrue($paint->getRealisationDate() === $date);
        $this->assertTrue($paint->getCreatedAt() === $date);
        $this->assertTrue($paint->getDescription() === 'description');
        $this->assertTrue($paint->isPortfolio() === true);
        $this->assertTrue($paint->getSlug() === 'slug');
        $this->assertTrue($paint->getFilePath() === 'filePath');
        $this->assertTrue($paint->getPainter() === $user);
        $this->assertContains($category, $paint->getCategory());
    }

    public function testIsFalse() {
        $paint = new Paint();
        $date = new DateTime();
        $user = new User();
        $category = new Category();

        $paint
             ->setName('name')
             ->setWidth(1)
             ->setHeight(1)
             ->setSellable(true)
             ->setPrice(1)
             ->setRealisationDate($date)
             ->setCreatedAt($date)
             ->setDescription('description')
             ->setPortfolio(true)
             ->setSlug('slug')
             ->setFilePath('filePath')
             ->setPainter($user)
             ->addCategory($category);

        $this->assertFalse($paint->getName() === 'falseName');
        $this->assertFalse($paint->getWidth() === 2);
        $this->assertFalse($paint->getHeight() === 2);
        $this->assertFalse($paint->isSellable() === false);
        $this->assertFalse($paint->getPrice() === 2);
        $this->assertFalse($paint->getRealisationDate() === new DateTime());
        $this->assertFalse($paint->getCreatedAt() === new DateTime());
        $this->assertFalse($paint->getDescription() === 'falseDescription');
        $this->assertFalse($paint->isPortfolio() === false);
        $this->assertFalse($paint->getSlug() === 'falseSlug');
        $this->assertFalse($paint->getFilePath() === 'falseFilePath');
        $this->assertFalse($paint->getPainter() === new User());
        $this->assertFalse($paint->getCategory() === new Category());
    }

    public function testIsEmpty() {
        $paint = new Paint();

        $this->assertEmpty($paint->getName());
        $this->assertEmpty($paint->getWidth());
        $this->assertEmpty($paint->getHeight());
        $this->assertEmpty($paint->isSellable());
        $this->assertEmpty($paint->getPrice());
        $this->assertEmpty($paint->getRealisationDate());
        $this->assertEmpty($paint->getCreatedAt());
        $this->assertEmpty($paint->getDescription());
        $this->assertEmpty($paint->isPortfolio());
        $this->assertEmpty($paint->getSlug());
        $this->assertEmpty($paint->getFilePath());
        $this->assertEmpty($paint->getPainter());
        $this->assertEmpty($paint->getCategory());
    }
}
