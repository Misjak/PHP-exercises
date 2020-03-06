const load_movies = () => {

  fetch('http://www.cbp-exercises.test:8080/basicphp/exer/day26/movie_names.php')
  .then(response => response.json()
  .then(data => {
      console.log(data);
      let list = document.querySelector('ul');
      data.forEach(item => {
        let li = document.createElement('li');
        li.innerHTML = item;
        list.appendChild(li);
      })

    //   // data.map (item => {
    // document.querySelector('ul').innerHTML += <li>${item}</li>
    //   })


  }))
 

}

document.querySelector('button').addEventListener ('click', load_movies);

