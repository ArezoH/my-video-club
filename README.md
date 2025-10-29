[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/EKxGVG9J)
<img width="800" alt="logo_header_borja" src="https://github.com/user-attachments/assets/c9cc5e37-908c-4b48-a9fe-40f46a8130d0" />

# Pràctica Videoclub – DWES (PHP Orientat a Objectes)

## Descripció

Aquesta pràctica consisteix en desenvolupar **tots els exercicis** del projecte Videoclub (EXERCICI 126 a EXERCICI 134) plantejats al bloc corresponent, integrant conceptes clau de la programació orientada a objectes amb PHP. Cal crear i modificar les classes, implementar herència, classes abstractes, interfícies i mètodes, i provar totes les funcionalitats amb els arxius `inici.php`, `inici2.php` i `inici3.php` proporcionats.

---
## Resultats d'aprenentatge i competències

[Fes clic aquí per veure els resultats d'aprenentatge i competències treballades](./ras.md)

___

## Estructura recomanada del projecte

```

practica-videoclub/
│
├── classes/
│   ├── Soport.php
│   ├── CintaVideo.php
│   ├── Dvd.php
│   ├── Joc.php
│   ├── Client.php
│   ├── Videoclub.php
│   ├── Resumible.php
│   └── ... (altres classes de la pràctica, si n'hi hagués)
│
├── tests/
│   ├── inici.php
│   ├── inici2.php
│   ├── inici3.php
│
├── README_llinatge1_nom1.md
└── README.md

```

---

## Instruccions d'instal·lació i execució

1. **Clona el repositori** que t'han assignat automàticament a través de GitHub Classroom.
2. Organitza el projecte localment segons l'estructura recomanada.
3. Per executar les proves, obre un terminal i utilitza `php` amb els fitxers de test, per exemple:
    ```
    php tests/inici.php
    php tests/inici2.php
    php tests/inici3.php
    ```
4. Assegura't que cada fitxer de test mostra per pantalla la sortida que s'indica als enunciats.

---

## Documentació del projecte

- **Cada classe** ha d'incloure una breu documentació (comentaris en el codi) explicant la seva finalitat i els seus mètodes principals.
- **README_llinatge1_nom1:** Incloent aquí la descripció general, instruccions d'execució, tasques d'entrega i qualsevol aclariment.

---

## Detall de les classes / funcionalitats a implementar

- **Soport**: Classe base, constant IVA, mètodes bàsics, mostraResum.
- **CintaVideo, Dvd, Joc**: Cada una hereta de Soport i afegeix atributs i mètodes específics.
- **Client**: Gestió de clients, lloguer de suports, comprovacions, llistat de lloguers.
- **Videoclub**: Manté la relació entre suports i clients, gestió centralitzada.
- **Classes abstractes i Interfícies**: Conversió de Soport a abstracta, creació i implementació de `Resumible`.
- **Proves**: Fitxers d'exemple (`inici*.php`) demostrant el funcionament correcte.

---

## Tasques per a l'entrega a través de GitHub Classroom

### 1. Accepta la tasca i clona el repositori

- Accedeix a l'enllaç de GitHub Classroom proporcionat pel professor/a.
- Accepta la tasca. Automàticament se't crearà un repositori privat amb el nom **`practica-videoclub`** (o similar segons la configuració).
- Clona el repositori al teu ordinador:
    ```
    git clone https://github.com/cifpfbmoll/practica-videoclub-[EL-TEU-USUARI].git
    cd practica-videoclub-[EL-TEU-USUARI]
    ```

### 2. Desenvolupa la pràctica

- Crea l'estructura de carpetes `classes/` i `tests/`.
- Implementa totes les classes i fitxers de prova segons els exercicis.
- Comprova que tot funciona correctament executant els fitxers de test.

### 3. Documenta el codi

- Afegeix comentaris a cada classe explicant la seva funcionalitat.
- Completa aquest README.md amb qualsevol informació addicional necessària.

### 4. Puja els canvis a GitHub

Un cop tinguis tot el codi desenvolupat i provat, puja'l al repositori:

```

git add .
git commit -m "Entrega pràctica videoclub completa"
git push origin main

```

*(Si la branca principal es diu `master` en lloc de `main`, utilitza `git push origin master`)*

### 5. Verifica l'entrega

- Accedeix al teu repositori a GitHub i comprova que tots els fitxers s'han pujat correctament.
- Assegura't que l'estructura de carpetes és la correcta i que el README.md es visualitza bé.
- **No facis el repositori públic.** GitHub Classroom ja el manté privat i visible només per tu i el professor/a.

### 6. Data límit d'entrega

Consulta la data límit indicada a GitHub Classroom o a l'aula virtual. **Qualsevol commit realitzat abans de la data límit serà considerat vàlid per a l'avaluació.**

---

## Criteris d'avaluació

- **Correcció i completitud** de tots els exercicis del bloc videoclub (126-134).
- **Funcionament del codi** segons els exemples de sortida proporcionats.
- **Organització del projecte** (estructura de carpetes, nomenclatura de fitxers).
- **Documentació del codi** (comentaris clars i README complet).
- **Ús correcte de Git** (commits amb missatges descriptius).

---

## Observacions finals

- Pots utilitzar qualsevol editor de codi o IDE (p. ex. VSCode, PhpStorm).
- Segueix la nomenclatura indicada a l'enunciat i respecta el format de sortida.
- Si tens dubtes tècnics o d'enunciat, contacta amb el professor/a a temps.
- Fes commits regulars al llarg del desenvolupament de la pràctica (no només un commit final). **Si només hi ha un commit final dels arxiu la pràctica es donarà per no aprovada**
- La correcta organització, documentació i funcionament del codi influirà en la nota final.

---

**Bona feina!**


