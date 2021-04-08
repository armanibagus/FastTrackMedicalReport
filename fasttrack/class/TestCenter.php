<?php


class TestCenter
{
  private $centerID = 0;
  private $centerName = "";
  private $phoneNumber = "";
  private $address = "";
  private $listOfOfficer;
  private $listOfTestKit;

  /**
   * TestCenter constructor.
   * @param string $centerName
   * @param string $phoneNumber
   * @param string $address
   */
  public function __construct(string $centerName, string $phoneNumber, string $address)
  {
    $this->centerID;
    $this->centerName = $centerName;
    $this->phoneNumber = $phoneNumber;
    $this->address = $address;
    $this->listOfOfficer = array();
    $this->listOfTestKit = array();
  }

  /**
   * @return int
   */
  public function getCenterID(): int
  {
    return $this->centerID;
  }

  /**
   * @return string
   */
  public function getCenterName(): string
  {
    return $this->centerName;
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
  public function getListOfOfficer(): array
  {
    return $this->listOfOfficer;
  }

  /**
   * @return array
   */
  public function getListOfTestKit(): array
  {
    return $this->listOfTestKit;
  }

  /**
   * @param int $centerID
   */
  public function setCenterID(int $centerID): void
  {
    $this->centerID = $centerID;
  }

  /**
   * @param string $centerName
   */
  public function setCenterName(string $centerName): void
  {
    $this->centerName = $centerName;
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

}
?>