CREATE TABLE Order (
    order_id INT PRIMARY KEY,
    user_id INT,
    admin_id INT,
    order_details TEXT,
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (admin_id) REFERENCES Admin(admin_id)
);