<?php


class Patient extends User
{
  private $patientType = "";
  private $symptoms = "";

  /**
   * CenterOfficer constructor.
   * @param string $username
   * @param string $password
   * @param string $name
   * @param string $phoneNumber
   * @param string $address
   * @param string $patientType
   * @param string $symptoms
   */
  public function __construct(string $username, string $password, string $name, string $phoneNumber, string $address,
                              string $patientType, string $symptoms)
  {
    parent::__construct($username, $password, $name, $phoneNumber,$address);
    $this->patientType = $patientType;
    $this->symptoms = $symptoms;
  }

  /**
   * @return string
   */
  public function getPatientType(): string
  {
    return $this->patientType;
  }

  /**
   * @return string
   */
  public function getSymptoms(): string
  {
    return $this->symptoms;
  }

  /**
   * @param string $patientType
   */
  public function setPatientType(string $patientType): void
  {
    $this->patientType = $patientType;
  }

  /**
   * @param string $symptoms
   */
  public function setSymptoms(string $symptoms): void
  {
    $this->symptoms = $symptoms;
  }

  public function viewTestHistory(): void
  {

  }
}
?>