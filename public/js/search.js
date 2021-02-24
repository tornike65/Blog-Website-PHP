
// var addspan = document.querySelector(".form-group");
// addspan.innerHTML += `<span class="icon fa fa-search"><a class="search" href="http://localhost:8000?title="></a></span>`;
// var span = document.querySelector(".search");
// //console.log(span)

//  searchvalue.addEventListener('keyup',function(){
//   console.log(searchvalue.value);
// })
// function getPosts() {
//   var pag = document.querySelector(".pag");
//   pag.innerHTML = '';
//   var searchvalue = document.querySelector(".form-control").value;
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       var a = JSON.parse(this.responseText);
//       pag.innerHTML += renderPagination(a,searchvalue);
//       renderView(a.data)
//     }
//   };
//   xhttp.open("GET", `http://localhost:8000?title=${searchvalue}`, true);
//   xhttp.send();
// }

// function renderView(collection) {
//   var row = document.querySelector('.cards-row');
//   row.innerHTML = '';
//   collection.forEach(element => {
//     row.innerHTML += renderCard(element);
//   });
// }

// function renderCard(obj) {
//   return `<div class="col-md-6">
//   <a href="/post/${obj.slug}" class="blog-entry ">
//       <img src="${obj.image}" alt="Image placeholder">
//       <div class="blog-content-body">
//        <div class="post-meta">
//           <span class="author" ><img src="images/person_1.jpg" alt="Colorlib">
//             ${obj.author}</span>
//             <span class="mr-2">${obj.created_at}</span>
//           <span>4<span class="ml-2 fa fa-comments"></span></span>
//         </div>
//           <h2>${obj.title}</h2>
//       </div>
//   </a></div>`
// }


// function pagination(data){
// var searchvalue = document.querySelector(".form-control").value;
// for (let index = 0; index < collection.length; index++) {
//   const element = array[index];

// }
// }

// function renderPagination(data,title) {
//   return `<nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">

//   <a href="http://localhost:8000?title=${title}&page=${data.current_page-1}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
// « Previous
// </a>


//   <a href="http://localhost:8000?title=${title}&page=${data.current_page+1}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
// Next »
// </a>
// </nav>`
// }

// function replyComment(){
//     var replyForm = document.querySelector(".hidden");
//     replyForm.style.display = "block";
// }



function addComment() {
    console.log("start");
var coment = document.querySelector("#message").value;
    var slug = document.location.href;
    var res = slug.split('/');
    var comentarea = document.querySelector(".coment-area");
    var req = new XMLHttpRequest();
    req.onload = function () {
        comentarea.innerHTML = JSON.parse(this.responseText);
    }
    req.open("POST", `http://localhost:8000/post/addComment/${res[4]}`,true);
    req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    req.send(coment);
    console.log("end");

}