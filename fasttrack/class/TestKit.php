<?php


class TestKit
{
  private $kitID = 0;
  private $testName = "";
  private $availableStock = 0;
  private $listOfTest;

  /**
   * TestKit constructor.
   * @param string $testName
   * @param int $availableStock
   */
  public function __construct(string $testName, int $availableStock)
  {
    $this->kitID;
    $this->testName = $testName;
    $this->availableStock = $availableStock;
    $this->listOfTest = array();
  }

  /**
   * @return int
   */
  public function getKitID(): int
  {
    return $this->kitID;
  }

  /**
   * @return string
   */
  public function getTestName(): string
  {
    return $this->testName;
  }

  /**
   * @return int
   */
  public function getAvailableStock(): int
  {
    return $this->availableStock;
  }

  /**
   * @return array
   */
  public function getListOfTest(): array
  {
    return $this->listOfTest;
  }

  /**
   * @param int $kitID
   */
  public function setKitID(int $kitID): void
  {
    $this->kitID = $kitID;
  }

  /**
   * @param string $testName
   */
  public function setTestName(string $testName): void
  {
    $this->testName = $testName;
  }

  /**
   * @param int $availableStock
   */
  public function setAvailableStock(int $availableStock): void
  {
    $this->availableStock = $availableStock;
  }

  public function editTestKitStock(int $stock): void
  {
    $this->availableStock += $stock;
  }
}
?>