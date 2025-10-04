const vocales = ['a', 'e', 'i,', 'o', 'u'];

function efe(palabra) {
    let resultado = "";
    palabra.split('').forEach((letra) => {
        for (let index in vocales) {
            if (vocales[index] == letra) {
                resultado += `${letra}f${letra}`;
                return;
            }
        }
        resultado += letra; 
    });
    return resultado;
}

let palabra = "hola";
console.log(efe(palabra));
