โครงสร้าง WEB APPLICATION มีดังต่อไปนี้

1.ในส่วนของ Docker Compose นั้น WEB APPLICATION สร้าง Run อยู่บน Docker Compose เป็นเครื่องมือ โอเพ่นซอร์ส ที่ช่วยปรับปรุงกระบวนการกำหนด กำหนดค่า และจัดการแอปพลิเคชัน Docker แบบหลายคอนเทนเนอร์ ด้วยการนำเสนอวิธีการที่ไม่ซับซ้อนในการประกาศและเชื่อมต่อหลายบริการโดยใช้ไฟล์ YAML ไฟล์เดียว Docker Compose จึงช่วยปรับปรุงกระบวนการพัฒนา ทดสอบ และปรับใช้ได้อย่างมาก เป็นผลให้นักพัฒนาสามารถมีสมาธิกับการเขียนโค้ดโดยไม่ต้องกังวลกับโครงสร้างพื้นฐานพื้นฐาน โดยการสร้าง docker compose ขึ้นมา คือไปกำหนดไว้ในไฟล์ docker-compose.yml เลย ว่าใช้ services อะไรบ้าง ตั้งค่าไรบ้าง จากนั้นก็ใช้คำสั่ง run command เจ้า docker-compose โดยใช้คำสั่ง docker-compose up -d แค่บรรทัดเดียว มันก็จะทำการสร้าง container ทุกๆอันให้เราอัตโนมัติ ตามค่า config ที่เราตั้งไว้

2.ในส่วนของ WEB นี้ ใช้ PHP-Wordpress ในการทำเป็น Front-End Interface โดยกำหนด Pages ขึ้นมาได้แก Home , About , Research , Mycontacts (ได้มาจากการ Mod รหัสนักศึกษา)
     โดย WEB มีการผสมผสานการใช้ฟังก์ชั่นในรูปแบบต่างๆ เช่น การใช้เครื่องมือของ WEB เช่น Plugin ต่างๆ และการเพิ่มลูกเล่นอื่น เช่น ใช้ HTML / CSS เข้ามาช่วยในการทำ WEB ด้วย

3.ในส่วนของ Database ใช้เป็น MariaDB เป็นระบบจัดการฐานข้อมูลที่เป็น Open Source (ฟรี) มักใช้เป็นอีกทางเลือกทดแทนในการจัดการ MySQL ของแพลตฟอร์มยอดนิยมอย่าง LAMP stack หรือ Linux, Apache, MySQL, PHP/Python/Perl นอกจากนี้ MariaDB ถูกพัฒนาออกมาเพื่อต้องการมาแทนที่ MySQL 
