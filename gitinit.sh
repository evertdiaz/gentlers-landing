#!/bin/bash
echo "Iniciando la configuracion de tu nuevo repositorio"
if [ true ]; then
 
	echo "Iniciando repositorio"
	git init

	echo "Copiando el  hook en la carpeta" 
	cp post-receive .git/hooks/

	echo "Configurar permiso de ejecucion"
	chmod +x .git/hooks/post-receive

	echo "Configurar Pushes"
	git config receive.denyCurrentBranch ignore
	
	echo "AutoCRLF"
	git config --global core.autocrlf true
	git config --global core.whitespace cr-at-eol

	echo "Creando archivo temporal"
	touch info.txt

	echo "Añadiendo al Staging Area"
	git add -A

	echo "Primer commit"
	git commit -m "Primer commit"

	echo "Done"
	echo ""
	cd
	pwd
else
	echo "Ocurrio un error."
fi
