<?php
class Job {
    private $conn;
    private $allowedFields = [
        'id',
        'title',
        'description',
        'company',
        'location',
        'job_type',
        'is_remote',
        'created_at',
        'updated_at'
    ];

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getAllJobs() {
        $fields = implode(", ", $this->allowedFields);
        $sql = "SELECT $fields FROM job_postings";
        $result = $this->conn->query($sql);

        if ($result === false) {
            return null;
        }

        $jobs = [];
        while ($row = $result->fetch_assoc()) {
            // Konverter is_remote fra 0/1 til boolean for bedre JSON-repræsentation
            $row['is_remote'] = (bool)$row['is_remote'];
            $jobs[] = $row;
        }

        return $jobs;
    }
}
?>