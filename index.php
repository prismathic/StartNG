<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship">
    <meta name="keywords" content="hng, start, internship, beginner, developer" />
    <meta property="og:title" content="StartNG" />
    <meta property="og:image" content="https://res.cloudinary.com/jeffogah/image/upload/v1564073433/Start_Default.png" />
    <meta property="og:description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title>StartNG</title>
  </head>
  <body>
    <div class="container-fluid page-wrapper">
      <div class="row content p-0">
        <div
          class="col-sm-12 col-lg-6 bg-info text-white start-info pt-2 pt-sm-5 p-md-5 pt-sm-0"
        >
          <span
            ><img src="/img/start.png" alt="startng" class="img-thumb" />
            <h5 class="d-inline font-weight-bold">Start</h5></span
          >
          <div class="mt-4">
            <h2 class="font-weight-bold">HNG 6.0 Pre-Internship</h2>
            <small
              >HNG Internship 6.0 offers the best on hands practice 
              in the world of programming. <br />Pre-Internship is for complete beginners who want to learn the basics of software before the internship starts.</small
            >
          </div>
        </div>
        <div class="col-sm-12 col-lg-6  px-4 pt-5">
          <h5 class="font-weight-bold">Join HNG 6.0 Pre-Internship</h5>
          <form action="process.php" method="POST" class="p-0 font-weight-bold mt-4">
            <div class="form-group mt-4">
              <label for="inputName">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="inputName"
                placeholder="Enter your full name"
                required
              />
            </div>
            <div class="form-group mt-4">
              <label for="inputEmail">Email Address</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                placeholder="you@example.com"
                required
              />
            </div>
            <div class="form-group mt-4">
              <label for="inputPhoneNumber">Phone Number</label>
              <input
                type="tel"
                class="form-control"
                id="inputPhoneNumber"
                placeholder="+2340800000000"
                required
              />
            </div>
            <div class="form-group mt-4">
              <label for="inputTrack">Learning Track</label>
              <select id="inputTrack" class="form-control" required>
                <option selected hidden value="">Choose...</option>
                <option value="Frontend">Frontend</option>
                <option value="Backend">Backend</option>
                <option value="Digital Marketing">Digital Marketing</option>
              </select>
            </div>
            <div class="form-row">
              <div class="form-group col mt-3">
                <label for="inputLocation">Location</label>
                <select id="inputLocation" class="form-control" required onclick="getLocation()">
                  <option selected hidden value=""
                    >Choose location closest to you</option
                  >
                  <option>Lagos</option>
                  <option>Uyo</option>
                  <option>Kaduna</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group col mt-4 d-none" id="locationText">
                <label for="inputOtherLocation"></label>
                <input
                  type="text"
                  class="form-control"
                  id="inputOtherLocation"
                  placeholder="Enter your city"                  
                />
              </div>
            </div>
            <button type="submit" class="btn bg-main text-white w-100 mt-4">
              Join Now!
            </button>
          </form>
        </div>
      </div>
      <div class="text-center text-main my-2">
        &copy 2019 HNG internship . All Rights Reserved.
      </div>
    </div>
    <script src="scripts/index.js"></script>
  </body>
</html>