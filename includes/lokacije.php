<?php 


class Lokacije {
    //sve lokacije
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM lokacije");
        $query->execute();

        return $query->fetchAll();
    }
    //jedna lokacija
    public function fetch_data($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM lokacije WHERE lokacija_id = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch();
    }
}


class Spratovi {
    //svi spratovi
    public function fetch_all_sprat() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM spratovi");
        $query->execute();

        return $query->fetchAll();
    }
    //jedan sprat
    public function fetch_data_sprat($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM spratovi WHERE spratovi_id = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch();
    }
    //spratovi jedne lokacije
    public function fetch_all_spratovi($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT spratovi.* FROM lokacije JOIN spratovi ON lokacije.lokacija_id = spratovi.id_lokacije WHERE lokacije.lokacija_id = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchAll();
    }
}

class Stanovi {
    //svi stanovi
    public function fetch_all_stan() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM stanovi");
        $query->execute();

        return $query->fetchAll();
    }
    //jedan stan
    public function fetch_data_stan($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM stanovi WHERE stan_id_ = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch();
    }
    //stanovi jednog sprata na jednoj lokaciji
    public function fetch_data_stan_($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT stanovi.* FROM spratovi JOIN stanovi ON spratovi.spratovi_id = stanovi.id_sprata_ WHERE spratovi.spratovi_id = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchAll();
    }
}


class Prostorije {
    //sve prostorije
    public function fetch_all_prostorija() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM prostorije");
        $query->execute();

        return $query->fetchAll();
    }
    //prostorije jednog stana
    public function fetch_data_prostorija($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT prostorije.* FROM stanovi JOIN prostorije ON stanovi.stan_id_ = prostorije.id_stana__ WHERE stanovi.stan_id_ = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchAll();
    }
}

?>