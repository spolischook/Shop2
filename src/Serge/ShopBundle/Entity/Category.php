<?php

namespace Serge\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Serge\ShopBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_code", type="integer")
     */
    private $supplierCode;

    /**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="categories")
     * @ORM\JoinTable(name="category_product")
     */
    private $products;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     */
    private $children;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="children")
     */
    private $parent;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->children = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param  $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }

    /**
     * @return
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param  $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * @return
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products->add($product);
    }

    /**
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * @param  $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    /**
     * @param string $supplierCode
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;
    }
}
