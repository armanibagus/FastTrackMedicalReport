<?php


class User
{
  protected $username = "";
  protected $password = "";
  protected $name = "";
  protected $phoneNumber = "";
  protected $address = "";
  private $listOfTest;

  /**
   * User constructor.
   * @param string $username
   * @param string $password
   * @param string $name
   * @param string $phoneNumber
   * @param string $address
   */
  public function __construct(string $username, string $password, string $name, string $phoneNumber, string $address)
  {
    $this->username = $username;
    $this->password = $password;
    $this->name = $name;
    $this->phoneNumber = $phoneNumber;
    $this->address = $address;
    $this->listOfTest = array();
  }


  /**
   * @return string
   */
  public function getUsername(): string
  {
    return $this->username;
  }

  /**
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getPhoneNumber(): string
  {
    return $this->phoneNumber;
  }

  /**
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }

  /**
   * @return array
   */
  public function getListOfTest(): array
  {
    return $this->listOfTest;
  }

  /**
   * @param string $username
   */
  public function setUsername(string $username): void
  {
    $this->username = $username;
  }

  /**
   * @param string $password
   */
  public function setPassword(string $password): void
  {
    $this->password = $password;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  /**
   * @param string $phoneNumber
   */
  public function setPhoneNumber(string $phoneNumber): void
  {
    $this->phoneNumber = $phoneNumber;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address): void
  {
    $this->address = $address;
  }

  public function login(): void
  {

  }

  public function logout(): void
  {

  }

  /**
   * @param string $password
   * @param string $name
   * @param string $phoneNumber
   * @param string $address
   */
  public function manageProfile(string $password, string $name, string $phoneNumber, string $address): void
  {
    $this->setPassword($password);
    $this->setName($name);
    $this->setPhoneNumber($phoneNumber);
    $this->setAddress($this->address);
  }
}
?>