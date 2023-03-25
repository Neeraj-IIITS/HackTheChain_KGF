<?php
    include "css/db_conn.php";
    include "header.php";

    if(isset($_POST['submit'])) {
        $name = $_POST ['name'];
        $email = $_POST ['email'];
        $comment = $_POST ['comment'];

        $sql = "INSERT INTO `contact_us`(`id`, `name`,`email`, `comment`) VALUES (null,'$name','$email','$comment')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header ("Location: index.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/style_sheet.css" rel="stylesheet"/>
</head>

<section class="text-gray-600 body-font relative" style="user-select: auto; background-color: rgb(191, 221, 241);">
        <div id="aboutus">
        <div class="container px-5 py-24 mx-auto" style="user-select: auto;">
          <div class="flex flex-col text-center w-full mb-12" style="user-select: auto;">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="user-select: auto;">Contact Us</h1> 
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="user-select: auto;">Feel free to send us your queries.</p>
          </div>
          <form action="" method="POST">
          <div class="lg:w-1/2 md:w-2/3 mx-auto" style="user-select: auto;">
            <div class="flex flex-wrap -m-2" style="user-select: auto;">
              <div class="p-2 w-1/2" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="name" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Name</label>                   
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Name">
                </div>
              </div>
              <div class="p-2 w-1/2" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="email" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Email">
                </div>
              </div>
              <div class="p-2 w-full" style="user-select: auto;">
                <div class="relative" style="user-select: auto;">
                  <label for="message" class="leading-7 text-sm text-gray-600" style="user-select: auto;">Message</label>                      
                  <textarea id="comment" name="comment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" style="user-select: auto;" placeholder="Enter your Query"></textarea>
                </div>
              </div>
              <div class="p-2 w-full" style="user-select: auto;">
                <button type="submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="user-select: auto;">Submit</button>
              </div>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center" style="user-select: auto;">
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
      <section class="text-gray-600 body-font">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Team Members</h1>
      <h4 class="lg:w-5/10 w-full leading-relaxed text-gray-500">We are happy to introduce our team...</h4>
    </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/2 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="MNS" class="w-40 h-40 mb-20 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/neeraj_pic.jpg">
          <p class="leading-relaxed">I'm Neeraj, I took the responsibility as a Full Stack Developer in our project. I will be managing all the designs, resource allocations and all the features of the website.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Mala Neeraj Srinivas</h2>
          <p class="text-gray-500">Full Stack Developer</p> <br>
          <a class="fa fa-facebook-official" style="font-size:40px;" href="https://www.facebook.com/neeraj.srinivas.908?mibextid=ZbWKwL" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-twitter" style="font-size:40px" href="https://twitter.com/mala_neeraj?t=lpnGBerP0sCO_8942tw7CQ&s=09" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-instagram" style="font-size:40px" href="https://instagram.com/sri_bangaru_568?igshid=NTA5ZTk1NTc=" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-linkedin" style="font-size:40px" href="https://www.linkedin.com/in/neeraj-srinivas-26217a228" target="_blank"></a>
        </div>
      </div>

      <div class="lg:w-1/2 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="SR" class="w-40 h-40 mb-20 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/surender_pic.jpg">
          <p class="leading-relaxed">I'm Surender, I took the responsibility as a Frontend Designer and Resource Manager of the website. I will managing all the resources and the frontend designing.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Surender Rathod</h2>
          <p class="text-gray-500">Frontend Designer and Resource Manager</p> <br>
          <a class="fa fa-facebook-official" style="font-size:40px;" href="https://www.facebook.com/profile.php?id=100025495269323&mibextid=ZbWKwL" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-twitter" style="font-size:40px" href="https://twitter.com/Surender2423?t=mZQdcLNZGWhKNay0kgWziQ&s=08" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-instagram" style="font-size:40px" href="https://www.instagram.com/surendhar__rathod/" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="fa fa-linkedin" style="font-size:40px" href="https://www.linkedin.com/in/surender-rathod-72493424b" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</section>
      </section> 
        
  </body>
</html> 