<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 * @author Axel
 * @ORM\HasLifecycleCallbacks()
 */
Class Event {
	/**
	 * @ORM\Id()
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue()
	 */
	protected $id;
	
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $name;
	
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $urlmap;
	
	
	/**
	 * @ORM\Column(type="text")
	 */
	private $description;
	
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	private $date_start;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	private $date_end;
	
	/**
	 *
	 * @return the id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @return the name
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 *
	 * @param string $name        	
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 *
	 * @return the url
	 */
	public function getUrlmap() {
		return $this->urlmap;
	}
	
	/**
	 *
	 * @param string $urlmap        	
	 */
	public function setUrlmap($urlmap) {
		$this->urlmap = $urlmap;
		return $this;
	}
	
	/**
	 *
	 * @return the description
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 *
	 * @param Text $description        	
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	
	/**
	 *
	 * @return the start date
	 */
	public function getDateStart() {
		return $this->date_start;
	}
	
	/**
	 *
	 * @param \DateTime $date_start        	
	 */
	public function setDateStart($date_start) {
		$this->date_start = $date_start;
		return $this;
	}
	
	/**
	 * @return the end date
	 */
	public function getDateEnd() {
		return $this->date_end;
	}
	
	/**
	 * @param \DateTime $date_end        	
	 */
	public function setDateEnd($date_end) {
		$this->date_end = $date_end;
		return $this;
	}
	
	
	
	
	
}