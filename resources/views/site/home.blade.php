<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Home</h1>

    <form method="post" action="{{ route('contact.save') }}">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"  ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"  ><br><br>
        <input type="submit" value="Submit">
    </form> 
      
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, ducimus, obcaecati officia dolor quasi ea voluptatibus veniam ad delectus omnis eos debitis? Nisi libero impedit possimus rerum perspiciatis quasi beatae.</p>
    
</body>
</html>