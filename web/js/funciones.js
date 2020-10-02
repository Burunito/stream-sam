function moverObjeto(object, pos, speed){
	object.animate(pos, speed);
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function moverPosiciones(object, positions) {
  	var moves = true, position = 0;
	do{
		moverObjeto(object, positions[position].pos, positions[position].speed);
  		await sleep(positions[position].speed);
		position++;
		if(positions[position])
			moves = true;
		else
			moves = false;
	}while(moves);
}