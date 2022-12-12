// 주어진 이름의 쿠키를 반환하는데,
// 조건에 맞는 쿠키가 없다면 undefined를 반환합니다.
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  //한번만 클릭해도 작동되기 위해서 미리 한번 클릭함
  document.getElementById('lang_class1').click();
  document.getElementById('lang_class2').click();
  document.getElementById('lang_class3').click();
  document.getElementById('lang_class4').click();

  //쿠키에 게시판 값이 저장되어 있다면 그 게시판을 불러온다.
  if(undefined!=getCookie("b1")){
    document.getElementById(getCookie("b1")).click();
  }
  if(undefined!=getCookie("b2")){
    document.getElementById(getCookie("b2")).click();
  }
  if(undefined!=getCookie("b3")){
    document.getElementById(getCookie("b3")).click();
  }
  if(undefined!=getCookie("b4")){
    document.getElementById(getCookie("b4")).click();
  }