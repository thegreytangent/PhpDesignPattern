<?php

interface Logger {
  public function log($data);
}


class LogToFile implements Logger {

  public function log($data) {
    var_dump("Log the data to file ");
  }

}

class LogToDatabase implements Logger {

  public function log($data) {
    var_dump("Log the data to database ");
  }

}

class LogToWebService implements Logger  {

  public function log($data) {
    var_dump("Log the data to sass ");
  }

}


class App {
  public function log($data, Logger $logger ) {
      $logger->log($data);
  }
}

echo (new App())->log("test", new LogToDatabase());


?>
