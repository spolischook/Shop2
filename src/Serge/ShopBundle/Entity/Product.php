<?php

namespace Serge\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Serge\ShopBundle\Entity\CategoryRepository;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Serge\ShopBundle\Entity\ProductRepository")
 */
class Product
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
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="products", cascade={"persist"})
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_code", type="integer")
     */
    private $supplierCode;

    /**
     * @var string
     *
     * @ORM\Column(name="availability_lvov", type="integer", length=255)
     */
    private $availabilityLvov;

    /**
     * @var string
     *
     * @ORM\Column(name="availability_kiev", type="integer", length=255)
     */
    private $availabilityKiev;

    /**
     * @var string
     *
     * @ORM\Column(name="availability_krrog", type="integer", length=255)
     */
    private $availabilityKrrog;

    /**
     * @var string
     *
     * @ORM\Column(name="availability_odessa", type="integer", length=255)
     */
    private $availabilityOdessa;

    /**
     * @var string
     *
     * @ORM\Column(name="price_dealer", type="float", length=255)
     */
    private $priceDealer;

    /**
     * @var string
     *
     * @ORM\Column(name="price_retail", type="float", length=255)
     */
    private $priceRetail;

    /**
     * @var string
     *
     * @ORM\Column(name="new", type="integer", length=255)
     */
    private $new;

    /**
     * @var string
     *
     * @ORM\Column(name="warranty", type="integer", length=255)
     */
    private $warranty;

    /**
     * @var string
     *
     * @ORM\Column(name="part_number", type="string", length=255)
     */
    private $partNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=255)
     */
    private $manufacturer;

    private $existCategories;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
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
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param Category $category
     */
    public function addCategory(Category $category)
    {
        $this->categories->add($category);
        $category->addProduct($this);
    }

    /**
     * @param Category $category
     */
    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
        $category->removeProduct($this);
    }

    /**
     * @param  $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }


    public function setExistCategories($existCategories)
    {
        foreach ($existCategories as $category) {
            $category->getProducts()->add($this);
            $this->categories->add($category);
        }
    }

    public function getExistCategories()
    {
        return $this->existCategories;
    }

    public function setAvailabilityKiev($availabilityKiev)
    {
        $this->availabilityKiev = $availabilityKiev;
    }

    public function getAvailabilityKiev()
    {
        return $this->availabilityKiev;
    }

    public function setAvailabilityKrrog($availabilityKrrog)
    {
        $this->availabilityKrrog = $availabilityKrrog;
    }

    public function getAvailabilityKrrog()
    {
        return $this->availabilityKrrog;
    }

    public function setAvailabilityLvov($availabilityLvov)
    {
        $this->availabilityLvov = $availabilityLvov;
    }

    public function getAvailabilityLvov()
    {
        return $this->availabilityLvov;
    }

    public function setAvailabilityOdessa($availabilityOdessa)
    {
        $this->availabilityOdessa = $availabilityOdessa;
    }

    public function getAvailabilityOdessa()
    {
        return $this->availabilityOdessa;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setNew($new)
    {
        $this->new = $new;
    }

    public function getNew()
    {
        return $this->new;
    }

    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
    }

    public function getPartNumber()
    {
        return $this->partNumber;
    }

    public function setPriceDealer($priceDealer)
    {
        $this->priceDealer = $priceDealer;
    }

    public function getPriceDealer()
    {
        return $this->priceDealer;
    }

    public function setPriceRetail($priceRetail)
    {
        $this->priceRetail = $priceRetail;
    }

    public function getPriceRetail()
    {
        return $this->priceRetail;
    }

    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;
    }

    public function getWarranty()
    {
        return $this->warranty;
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