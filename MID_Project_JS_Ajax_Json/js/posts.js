function getAllPost() {
  let xreq = new XMLHttpRequest();
  xreq.open("GET", "../models/postModeljs.php?func=allPost&pid=", true);
  xreq.send();

  xreq.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText=="empty")
      {
        document.getElementById('postTable').innerHTML="";
        document.getElementById('msg').innerHTML="";
        document.getElementById('emptyMsg').innerHTML="No post found";
      }
      else
      {
      let posts = JSON.parse(this.responseText);
      var k = '<tbody>'
      for (i = 0; i < posts.length; i++) {
        k += '<tr>';
        k += '<td>' + posts[i].postID + '</td>';
        k += '<td>' + posts[i].userID + '</td>';
        k += '<td>' + posts[i].text + '</td>';
        k += '<td><button onclick="deletePost(' + posts[i].postID + ')">Delete</td>';
        k += '</tr>';
      }
      k += '</tbody>';
      document.getElementById('postTable').innerHTML = k;
    }
      //posts =JSON.stringify(posts);
      //alert(posts);
      // for (let key in posts) {
      //     console.log(key, posts[key]);
      //   }
      //posts= JSON.stringify(posts);
      //alert(this.responseText);
      //for(var key in posts) {
      //    posts=Object.value(posts);
      //     alert(posts);
      // }
      //document.getElementById('postTable').innerHTML=posts;
    }
  }
}

function deletePost(id) {
  let xreq = new XMLHttpRequest();
  xreq.open("GET", "../models/postModeljs.php?func=deletePost&pid=" + id, true);
  xreq.send();
  xreq.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200)
    {
      if(this.responseText=="done")
      {
        document.getElementById('msg').innerHTML="Post Deleted Successfully";
        document.getElementById('postTable').innerHTML=getAllPost();  
      }
      else{
        document.getElementById('msg').innerHTML= this.responseText;
       // document.getElementById('msg').innerHTML="Post Deleted Successfully";
      }
      
    }
  }
}
