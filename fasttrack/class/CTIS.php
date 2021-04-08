<?php


class CTIS
{
  private $listOfTestCenter;
  private $listOfUser;

  /**
   * CTIS constructor.
   * @param array $listOfTestCenter
   * @param array $listOfUser
   */
  public function __construct()
  {
    $this->listOfTestCenter = array();
    $this->listOfUser = array();
  }

  /**
   * @return array
   */
  public function getListOfTestCenter(): array
  {
    return $this->listOfTestCenter;
  }

  /**
   * @return array
   */
  public function getListOfUser(): array
  {
    return $this->listOfUser;
  }

  /**
   * @param array $listOfTestCenter
   */
  public function setListOfTestCenter(array $listOfTestCenter): void
  {
    $this->listOfTestCenter = $listOfTestCenter;
  }

  /**
   * @param array $listOfUser
   */
  public function setListOfUser(array $listOfUser): void
  {
    $this->listOfUser = $listOfUser;
  }
}
?>