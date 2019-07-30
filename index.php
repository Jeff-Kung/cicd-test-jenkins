<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Run 6</title>
  <style>
    body {
      color: #ffffff;
      background-color: #0188cc;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }
    
    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }
    
    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>Demo for MSP</h1>
    <h2>This is how CICD workds</h2> 
    <h2>AWS Code PipeLine is not easy</h2>
  </div>
  </br>
  <div align="center">
  <?php
    $instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
    $zone = @file_get_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone");
    $private_id = @file_get_contents("http://instance-data/latest/meta-data/local-ipv4");
  ?>
    <img src="https://az796311.vo.msecnd.net/userupload/2ab6e6628384412ea3b2c39ea6a67f0f.jpg" width="300"/>
    </br>    
    <h2>EC2 Instance ID: <?php echo $instance_id; ?></h2>
    <h2>EC2 Zone: <?php echo $zone; ?></h2>
    <h2>EC2 Private IP: <?php echo $private_id; ?></h2>
    </br>
    <p>Please refer this link for more details. <a href="http://aws.amazon.com/documentation/codedeploy">AWS CodeDeploy Document</a>. Blue: #0188cc, Green: #00cc3a</p>
    <p>danrongm@amazon.com</a>.</p>
  </div>    
</body>
</html></html></html></html></html></html></html></html></html></html></html></html></html>
