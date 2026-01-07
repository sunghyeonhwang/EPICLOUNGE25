<!DOCTYPE html>
<html>
<head>
<style>
  .wrap {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
  }

  .video {
    width: 70%;
    max-width: 640px;
    margin-right: 20px;
  }

  .text {
    width: 30%;
    max-width: 640px;
  }

  @media (max-width: 640px) {
    .wrap {
      flex-direction: column;
      align-items: center;
    }

    .video,
    .text {
      width: 100%;
      margin-right: 0;
    }
  }
</style>
</head>
<body>
  <div class="wrap">
    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="text">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper euismod eros ac ullamcorper. Mauris consectetur malesuada ante a euismod. Ut tempus feugiat ligula non suscipit. Suspendisse potenti. In iaculis leo sit amet ligula iaculis, sed commodo metus vulputate. Vivamus a condimentum mi. Donec cursus pellentesque metus a dignissim.</p>
    </div>
  </div>
</body>
</html>