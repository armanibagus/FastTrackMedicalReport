<?php


class CenterOfficer extends User
{
  private $position = "";

  /**
   * CenterOfficer constructor.
   * @param string $username
   * @param string $password
   * @param string $name
   * @param string $phoneNumber
   * @param string $address
   * @param string $position
   */
  public function __construct(string $username, string $password, string $name, string $phoneNumber, string $address,
                              string $position)
  {
    parent::__construct($username, $password, $name, $phoneNumber, $address);
    $this->position = $position;

  }

  /**
   * @return string
   */
  public function getPosition(): string
  {
    return $this->position;
  }

  /**
   * @param string $position
   */
  public function setPosition(string $position): void
  {
    $this->position = $position;
  }

  public function generateTestReport(): void
  {

  }
}
?>