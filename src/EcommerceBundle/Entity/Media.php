<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\MediaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $name;

    /**
    * @ORM\Column(type="string", length=255, nullable=true)
    */
    private $path;

    public $file;


    /**
    * @var \DateTime
    * @ORM\Column(name="updated_at", type="datetime", nullable=true)
    * 
    */
    private $updateAt;

    /**
    * @ORM\PostLoad()
    *
    */
    public function postLoad(){
        $this->updateAt = new \DateTime();
    }

    public function getUploadRootDir()
    {
        return __dir__.'/../../../web/uploads';
    }

    public function getAbsolutePath(){
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath(); 
        $this->updateAt = new \DateTime();

        if(null !== $this->file){
            $this->path = sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
        }
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function upload(){
        if(null !== $this->file){
            $this->file->move($this->getUploadRootDir(),$this->path);
            unset($this->file);

            if($this->oldFile != null) unlink($this->tempFile);
        }
    }

    /**
    * @ORM\PreRemove()
    */
    public function preRemoveUpload()
    {
        $this->tempfile = $this->getAbsolutePath();
    }

    /**
    * @ORM\PostRemove()
    */
    public function removeUpload()
    {
        if(file_exists($this->tempfile)) unlink($this->tempfile ) ;
    }

    public function getAssetPath(){
        return 'uploads/'.$this->path;
    }

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="path", type="string", length=255)
    //  */
    // private $path;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="alt", type="string", length=125)
    //  */
    // private $alt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getName()
    {
        return $this->name;
    }
    /** Set name
     *
     * @param string $name
     *
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    // /**
    //  * Set path
    //  *
    //  * @param string $path
    //  *
    //  * @return Media
    //  */
    // public function setPath($path)
    // {
    //     $this->path = $path;

    //     return $this;
    // }

    // /**
    //  * Get path
    //  *
    //  * @return string
    //  */
    // public function getPath()
    // {
    //     return $this->path;
    // }

    // *
    //  * Set alt
    //  *
    //  * @param string $alt
    //  *
    //  * @return Media
     
    // public function setAlt($alt)
    // {
    //     $this->alt = $alt;

    //     return $this;
    // }

    // /**
    //  * Get alt
    //  *
    //  * @return string
    //  */
    // public function getAlt()
    // {
    //     return $this->alt;
    // }

    public function __tostring(){
         return $this->getPath();
    }
}
