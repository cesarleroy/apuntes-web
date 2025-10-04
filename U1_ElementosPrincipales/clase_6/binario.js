function dec2bin(numero) {
  let binario = "";
  do {
    if (numero % 2 == 0) {
      numero /= 2;
      binario = "0" + binario;
    } else {
      numero -= 1;
      numero /= 2;
      binario = "1" + binario;
    }
  } while (numero != 0);

  return binario;
}

console.log(dec2bin(22));
