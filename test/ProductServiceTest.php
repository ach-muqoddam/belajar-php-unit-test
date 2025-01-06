<?php 

namespace Adam\Test;

use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{

    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void 
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub() 
    {
        // Arrange
        // jika findById bukan null balikannya
        $product = new Product();
        $product->setId("1");

        // configure jika dipanggil findById nya
        $this->repository->method('findById')->willReturn($product);

        // Act
        $result = $this->repository->findById("1");
        // var_dump($result);

        // Assert
        self::assertSame($product, $result);
        // $this->assertNotNull($result);
        // $this->assertInstanceOf(Product::class, $result);
        // $this->assertEquals("1", $result->getId());
    }

    public function testStubMap() 
    {
        // Arrange
        // jika findById bukan null balikannya
        $product1 = new Product();
        $product1->setId("1");

        $product2 = new Product();
        $product2->setId("2");

        // Map
        $map = [
            ["1", $product1],
            ["2", $product2],
        ];

        // configure jika dipanggil findById nya
        $this->repository->method('findById')->willReturn($map);

        // Act
        self::assertSame($product1, $this->repository->findById("1"));
        self::assertSame($product2, $this->repository->findById("2"));
    }
}

?>