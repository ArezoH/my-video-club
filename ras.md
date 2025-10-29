<img width="800" alt="logo_header_borja" src="https://github.com/user-attachments/assets/c9cc5e37-908c-4b48-a9fe-40f46a8130d0" />

## Resultats d'Aprenentatge coberts

### RA2: Desenvolupar aplicacions web utilitzant programació orientada a objectes

Aquesta pràctica està **totalment alineada** amb aquest RA, ja que implementa:

- **Classes i objectes**: Creació de múltiples classes (Soport, CintaVideo, DVD, Joc, Client, Videoclub)
- **Encapsulació**: Ús de propietats privades amb getters/setters
- **Herència**: Jerarquia de classes (Soport → CintaVideo, DVD, Joc)
- **Classes abstractes**: Transformació de Soport en classe abstracta
- **Interfícies**: Implementació de la interfície Resumible
- **Polimorfisme**: Sobreescriptura de mètodes (mostraResum)
- **Mètodes estàtics i constants**: Implementació d'IVA, mètodes toHtml
- **Relacions entre objectes**: Composició i agregació (Videoclub conté Clients i Suports)


### RA3: Gestionar informació emmagatzemada en bases de dades

Encara que en aquesta fase no s'implementa directament, la pràctica **prepara l'estructura** per a:

- Persistència d'objectes (serialització JSON)
- Model de dades relacionals que després es mapejarà a BD


### RA4: Desenvolupar aplicacions web amb accés a bases de dades

La pràctica estableix les **bases arquitectòniques** per integrar posteriorment:

- Capa de negoci (classes del videoclub)
- Separació de responsabilitats (MVC)


## Competències professionals del DAW

### Competències específiques

**CE1: Desenvolupar aplicacions web amb independència del llenguatge utilitzant tecnologies de programació orientada a objectes**

- Implementació completa d'un projecte amb POO en PHP
- Aplicació de patrons de disseny (composició, herència)
- Modelatge UML a codi funcional

**CE2: Integrar continguts en l'àmbit d'aplicacions web, seleccionant i utilitzant tècniques i eines específiques**

- Generació dinàmica de contingut (mostraResum, llistat de productes)
- Gestió d'estat d'objectes (lloguers de clients)

**CE4: Aplicar criteris de qualitat al codi desenvolupat**

- Documentació de codi
- Nomenclatura adequada de classes i mètodes
- Estructura modular (una classe per arxiu)
- Proves sistemàtiques (inici.php, inici2.php, inici3.php)


### Competències generals

**CG2: Treballar autònomament, de forma organitzada**

- Desenvolupament incremental del projecte (exercicis 126-134)
- Gestió de versions amb Git i GitHub Classroom

**CG4: Formular, dissenyar i gestionar projectes**

- Disseny d'un sistema complet de gestió de videoclub
- Planificació de funcionalitats progressives

**CG5: Treballar en equip i comunicar-se de manera efectiva**

- Ús de GitHub per col·laboració (pair programming)
- Integració de canvis mitjançant git
