CREATE TABLE Courier (
    courier_id INT PRIMARY KEY,
    courier_name VARCHAR(100) NOT NULL,
    order_id INT,
    FOREIGN KEY (order_id) REFERENCES Order(order_id)
);