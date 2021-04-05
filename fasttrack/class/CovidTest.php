<?php


class CovidTest
{
  private $testID = 0;
  private $testDate = ""; // kalok bisa ubah jadi date
  private $result = "";
  private $resultDate = ""; // kalok bisa ubah jadi date
  private $status = "";

  /**
   * CovidTest constructor.
   */
  public function __construct()
  {
    $this->testID;
    $this->testDate = date("d/m/Y", time());
    $this->result = "";
    $this->resultDate = "";
    $this->status = "pending";
  }

  /**
   * @return int
   */
  public function getTestID(): int
  {
    return $this->testID;
  }

  /**
   * @return false|string
   */
  public function getTestDate()
  {
    return $this->testDate;
  }

  /**
   * @return string
   */
  public function getResult(): string
  {
    return $this->result;
  }

  /**
   * @return string
   */
  public function getResultDate(): string
  {
    return $this->resultDate;
  }

  /**
   * @return string
   */
  public function getStatus(): string
  {
    return $this->status;
  }

  /**
   * @param int $testID
   */
  public function setTestID(int $testID): void
  {
    $this->testID = $testID;
  }

  /**
   * @param false|string $testDate
   */
  public function setTestDate($testDate): void
  {
    $this->testDate = $testDate;
  }

  /**
   * @param string $result
   */
  public function setResult(string $result): void
  {
    $this->result = $result;
  }

  /**
   * @param string $resultDate
   */
  public function setResultDate(string $resultDate): void
  {
    $this->resultDate = $resultDate;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status): void
  {
    $this->status = $status;
  }

  public function updateTest(string $result, string $resultDate, string $status): void
  {
    $this->setResult($result);
    $this->setResultDate($resultDate);
    $this->setStatus($status);
  }
}
?>