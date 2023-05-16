var rows2 = document.querySelectorAll(".text-carusel-row");
console.log('Number of rows:' + rows2);
rows2.forEach(function (e, i) {
  let row_width = e.getBoundingClientRect().width;
  let row_item_width = e.children[0].getBoundingClientRect().width;
  //let row_item_width2 = e.children[1].getBoundingClientRect().width;
  let initial_offset = ((2 * row_item_width) / row_width) * 100 * -1;
  
  let x_translation = initial_offset * -1;
  //x_translation=1000;
  // console.log(e.children[0].clientWidth);  
  //console.log('row_width: ' + row_width);
  //console.log('row_item_width' + row_item_width);
  //console.log('row_item_width2' + row_item_width2);
  //console.log('initial_offset' + initial_offset);
  //console.log('e.children[0]: ' + e.children[0]);
  //console.log('row_item_width: ' + row_item_width);
  //console.log(x_translation);

  gsap.set(e, {
    xPercent: `${initial_offset}`
  });

  let duration = 4 * (i + 3);
  console.log('Duration:');
  var tl = gsap.timeline();

  tl.to(e, {
    ease: "none",
    duration: duration,    
    xPercent: 0,
    repeat: -1
  });
});



