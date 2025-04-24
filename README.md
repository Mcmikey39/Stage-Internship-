<b>Disclaimer:</b> <br/>
Wegens veiligheidsredenen en het eigendom van het bedrijf, heb ik na mijn stage geen toegang meer tot de ontwikkelde code en de live omgeving.
Dit verslag is gebaseerd op mijn herinneringen en aantekeningen van de werkzaamheden die ik tijdens mijn stage heb uitgevoerd.
Zie de map stage voor de code die ik heb kunnen gebruiken.

------------------------------------

Tijdens mijn stage heb ik een actieve rol gespeeld in de ontwikkeling en implementatie van een nieuw backend-systeem, evenals de creatie van een bijbehorende frontend-applicatie.
Het project omvatte het opzetten van een online omgeving, de ontwikkeling van de backend met bijbehorende API's, de integratie met klantapplicaties en het bouwen van een monitoring dashboard.

Werkzaamheden:

1. Kennismaking met Python: In de beginfase van mijn stage heb ik me verdiept in Python, de primaire programmeertaal die binnen het bedrijf wordt gebruikt.
2. Opzetten van een online omgeving (Heroku): Om de ontwikkelde backend te hosten, heb ik een online omgeving ingericht met behulp van Heroku. Dit vormde de basis voor de verdere ontwikkeling.
3. Ontwikkeling van de Backend (Django): Met behulp van het Django-framework heb ik de backend van het systeem ontwikkeld, gebaseerd op een databaseschema. Dit omvatte het ontwerpen van datamodellen en het implementeren van de functionaliteit.
4. Creëren en beveiligen van API-endpoints: Voor de communicatie met de applicaties die bij klanten draaien, heb ik verschillende API-endpoints ontworpen en geïmplementeerd. De toegang tot deze endpoints is beveiligd door middel van API-keys.
5. Integratie en testen: Een cruciaal onderdeel was het opzetten van de connectie tussen de klantapplicaties en de nieuwe backend. Intern zijn uitgebreide tests uitgevoerd om de correcte werking en stabiliteit te garanderen voordat de integratie bij klanten werd geïmplementeerd.
6. Gegevensverwerking: De data was gericht op het ontvangen van gegevens vanuit de klantapplicaties naar de centrale backend en database. Er vond geen dataoverdracht plaats van de backend terug naar de klantapplicaties.
7. Monitoring en beheerfunctionaliteiten: Om de status en het gebruik van de klantapplicaties te kunnen monitoren, heb ik verschillende functies geïmplementeerd:
   - Heartbeats: Een signalen van de applicaties om hun online status te verifiëren.
   - MAC-adrescontrole: Controle van het MAC-adres om te voorkomen dat een API-key op meerdere apparaten tegelijkertijd wordt gebruikt.
   - Versiecontrole: Het systeem controleerde of de klantapplicaties de meest recente versie draaiden en bood de mogelijkheid tot updates indien nodig.
8. Ontwikkeling van de Frontend (React): Nadat de basis van de backend functioneerde, heb ik een frontend-applicatie ontwikkeld met behulp van React. Dit dashboard bood een visueel overzicht van de klanten die de applicatie gebruikten en hun actuele status (online/offline).
9. Daarnaast werd de status van de API-key (meervoudig gebruik) gemonitord. De data in dit dashboard werd elke 15 seconden automatisch ververst om een beeld te geven en snel te kunnen ingrijpen bij problemen zoals offline applicaties of herhaaldelijk gebruik van dezelfde API-key.

Conclusie:

Mijn stageperiode was zeer divers en leerzaam. Ik heb niet alleen backend-vaardigheden in Python en Django opgedaan, maar ook ervaring met het opzetten van een cloudomgeving (Heroku), het ontwerpen en beveiligen van API's, en de integratie met externe applicaties.
De ontwikkeling van de frontend met React gaf me inzicht in het verbeelden van data en het creëren van een gebruikersinterface voor monitoring en beheer.
Deze ervaringen hebben mijn begrip van het volledige ontwikkelproces aanzienlijk verbeterd.

