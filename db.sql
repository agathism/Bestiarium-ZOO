CREATE TABLE animal_detail (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO details (name, description) VALUES ('Lions', 'Le lion (Panthera leo) est un mammifère carnivore de la famille des félins et l\'un des plus grands prédateurs terrestres. Surnommé le "roi des animaux", il est principalement présent en Afrique subsaharienne, bien que de petites populations subsistent en Inde. Contrairement à la plupart des autres félins, le lion est un animal social qui vit en groupes appelés "coalitions" ou "troupes", généralement composés d\'un mâle dominant, de plusieurs femelles et de leurs petits.

Les lions sont de redoutables chasseurs, mais ce sont généralement les lionnes qui traquent et capturent les proies. Leur régime alimentaire se compose principalement de grands herbivores tels que les zèbres, les buffles et les antilopes. Le mâle, plus imposant avec sa crinière majestueuse, protège le territoire et repousse les intrus.

Malheureusement, le lion est aujourd\'hui une espèce menacée en raison de la destruction de son habitat, des conflits avec les humains et du braconnage. De nombreuses initiatives de conservation tentent de protéger ces majestueux félins, notamment à travers des réserves naturelles et des programmes de reproduction en captivité.

Les lions jouent un rôle crucial dans l\'équilibre de leur écosystème en régulant les populations d\'herbivores et en éliminant les proies faibles ou malades. Ils symbolisent la puissance, la force et le courage dans de nombreuses cultures et apparaissent fréquemment dans l\'art, la littérature et l\'héraldique.')


SELECT animal.id AS 'id', animal.name AS 'name' FROM animal JOIN details ON animal.details_id = details.id;