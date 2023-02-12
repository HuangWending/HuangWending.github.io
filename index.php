<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <img src="The%20People's%20Republic%20of%20China.png" alt="donation">
    <title>MandengWong(HuangWending)</title>
</head>
<body>
<h1>MandengWong個人官方網站</h1>
<h2>https://mandengwonghuangwending.xyz</h2>

<p>2023年2月7日</p>
<p>今天是開始開發這個網站和寫代碼的日子，經過的我的手，才有它的生日!</p>

<p>2023年2月11日</p>
<p>今天我們的官方網站正式上線了，恭喜，網址有一年期限，如果更換網址會提前通知所有人，我將會給這個網站添加更多的內容和功能，有建議發郵件給我或者抖音私信</p>

<h1>聯繫我</h1>
<p>电子邮件：2110951913@qq.com或hwdstudioshuangwending@gmail.com</p>
<p>抖音號：WongWending關注，視頻點讚，評論，感激不盡！</p>

<a href="https://www.douyin.com/user/MS4wLjABAAAAh22eXsd4b75_IPW7Cc8HJhFJ9qTZv3bGjicJzD34G9o">
    <img src="douyin.png" alt="Logo">
</a>

<h1>支付宝公益捐款</h1>
<p>由於以後提供給中華人民共和國（包括澳門特別行政區，香港特別行政區和臺灣省）的任何服務，任何智慧財產權和版權的東西全部免費，我也沒有經濟來源，希望有條件可以支援我，感激不盡！</p>
<img src="MandengWongsAlipaycollectioncode.png" alt="donation">
<br>
<a href="https://www.alipay.com/">
    <button>前往支付寶官網</button>
</a>


<h2>程式設計語言代碼C/C++</h2>
<p>作用:实现加、减、乘、除的四则运算，以下为代码</p>
<p>#include <iostream>
    using namespace std;

    int main()
    {
    double num1, num2;
    char operation;

    cout << "Enter first number: ";
    cin >> num1;

    cout << "Enter second number: ";
    cin >> num2;

    cout << "Enter operation (+, -, *, /): ";
    cin >> operation;

    if (operation == '+')
    {
    cout << num1 + num2;
    }
    else if (operation == '-')
    {
    cout << num1 - num2;
    }
    else if (operation == '*')
    {
    cout << num1 * num2;
    }
    else if (operation == '/')
    {
    if (num2 == 0)
    {
    cout << "Error: Cannot divide by zero.";
    }
    else
    {
    cout << num1 / num2;
    }
    }
    else
    {
    cout << "Error: Invalid operator.";
    }

    return 0;
    }</p>

<p>作用實現註冊、登錄、重置密碼，以下为代码</p>
<p>#include <iostream>
    #include <map>
    #include <string>

    std::map<std::string, std::string> users;

    void registerUser() {
    std::cout << "Enter a username: ";
    std::string username;
    std::cin >> username;
    if (users.count(username) > 0) {
    std::cout << "Username already exists. Please choose another." << std::endl;
    return;
    }
    std::cout << "Enter a password: ";
    std::string password;
    std::cin >> password;
    users[username] = password;
    std::cout << "Registration successful." << std::endl;
    }

    void login() {
    std::cout << "Enter a username: ";
    std::string username;
    std::cin >> username;
    if (users.count(username) == 0) {
    std::cout << "Username does not exist." << std::endl;
    return;
    }
    std::cout << "Enter a password: ";
    std::string password;
    std::cin >> password;
    if (users[username] != password) {
    std::cout << "Incorrect password." << std::endl;
    return;
    }
    std::cout << "Login successful." << std::endl;
    }

    void resetPassword() {
    std::cout << "Enter a username: ";
    std::string username;
    std::cin >> username;
    if (users.count(username) == 0) {
    std::cout << "Username does not exist." << std::endl;
    return;
    }
    std::cout << "Enter a new password: ";
    std::string password;
    std::cin >> password;
    users[username] = password;
    std::cout << "Password reset successful." << std::endl;
    }

    int main() {
    while (true) {
    std::cout << "1. Register" << std::endl;
    std::cout << "2. Login" << std::endl;
    std::cout << "3. Reset password" << std::endl;
    std::cout << "4. Quit" << std::endl;
    int option;
    std::cin >> option;
    if (option == 1) {
    registerUser();
    } else if (option == 2) {
    login();
    } else if (option == 3) {
    resetPassword();
    } else if (option == 4) {
    break;
    }
    }
    return 0;
    }</p>
<p>使用C++語言代碼和其中的系統調用函數來檢測設備的配置資訊,以下为代码</p>
<p>#include <iostream>
    #include <fstream>
    #include <string>

    using namespace std;

    int main() {

    string osInfo;
    ifstream osInfoFile("/etc/os-release");
    if (osInfoFile.is_open()) {
    getline(osInfoFile, osInfo);
    cout << "Operating System: " << osInfo << endl;
    } else {
    cout << "Could not retrieve operating system information." << endl;
    }

    string hardwareInfo;
    ifstream hardwareInfoFile("/proc/cpuinfo");
    if (hardwareInfoFile.is_open()) {
    while (getline(hardwareInfoFile, hardwareInfo)) {
    cout << hardwareInfo << endl;
    }
    } else {
    cout << "Could not retrieve hardware information." << endl;
    }

    return 0;
    }</p>
<h2>程式設計語言代碼Python</h2>
<p>作用实现加、减、乘、除的四则运算，以下为代码</p>
<p>def main():
    num1 = float(input("Enter first number: "))
    num2 = float(input("Enter second number: "))
    operation = input("Enter operation (+, -, *, /): ")

    if operation == '+':
    result = num1 + num2
    elif operation == '-':
    result = num1 - num2
    elif operation == '*':
    result = num1 * num2
    elif operation == '/':
    if num2 == 0:
    print("Error: Cannot divide by zero.")
    return
    else:
    result = num1 / num2
    else:
    print("Error: Invalid operator.")
    return

    print("{0} {1} {2} = {3}".format(num1, operation, num2, result))

    if __name__ == '__main__':
    main()</p>

<p>作用實現註冊、登錄、重置密碼，以下为代码</p>
<p>users = {}

    def register():
    username = input("Enter a username: ")
    if username in users:
    print("Username already exists. Please choose another.")
    return
    password = input("Enter a password: ")
    users[username] = password
    print("Registration successful.")

    def login():
    username = input("Enter a username: ")
    if username not in users:
    print("Username does not exist.")
    return
    password = input("Enter a password: ")
    if users[username] != password:
    print("Incorrect password.")
    return
    print("Login successful.")

    def reset_password():
    username = input("Enter a username: ")
    if username not in users:
    print("Username does not exist.")
    return
    password = input("Enter a new password: ")
    users[username] = password
    print("Password reset successful.")

    while True:
    print("1. Register")
    print("2. Login")
    print("3. Reset password")
    print("4. Quit")
    option = int(input("Enter your choice: "))
    if option == 1:
    register()
    elif option == 2:
    login()
    elif option == 3:
    reset_password()
    elif option == 4:
    break</p>

<p>作用畫出中華人民共和國的象徵和標誌中華人民共和國國旗，並標註“中國，人民民主專政的社會主義國家”，以下为代码</p>

<p>import turtle

    turtle.speed(10)
    turtle.setup(650, 450)

    turtle.up()
    turtle.goto(-300, 200)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("red")
    turtle.pencolor("red")

    for i in range(2):
    turtle.forward(600)
    turtle.right(90)
    turtle.forward(400)
    turtle.right(90)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-200, 160)
    turtle.seth(-72)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.pencolor("yellow")
    for x in range(5):
    turtle.forward(120)
    turtle.right(144)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-100 - 17.3145, 160 - 6.174)
    turtle.seth(48.96347)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.pencolor("yellow")
    for x in range(5):
    turtle.forward(38.0417418)
    turtle.right(144)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-60 - 19.7948663580, 120 - 2.857143)
    turtle.seth(36.213211)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.pencolor("yellow")
    for x in range(5):
    turtle.forward(38.0417418)
    turtle.right(144)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-60 - 19.5, 60 + 5.714285848)
    turtle.seth(5)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.pencolor("yellow")
    for x in range(5):
    turtle.forward(38.0417418)
    turtle.right(144)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-100 - 17.2, 20 + 15.99999)
    turtle.seth(-35.1301)
    turtle.down()
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.pencolor("yellow")
    for x in range(5):
    turtle.forward(38.0417418)
    turtle.right(144)
    turtle.end_fill()

    turtle.up()
    turtle.goto(-200, -200)
    turtle.down()
    turtle.pencolor("black")
    turtle.write("中國，人民民主專政的社會主義國家", font=("Arial", 30, "normal"))

    turtle.hideturtle()

    turtle.done()</p>

<p>作用使用requests库发送HTTP请求，并使用BeautifulSoup解析HTML内容。它从输入的网页链接中提取以指定文件格式结尾的所有链接，然后对每个链接下载并保存文件，以下为代码</p>
<p>import requests
    from bs4 import BeautifulSoup

    def download_page(url):
    headers = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Safari/537.36"
    }
    response = requests.get(url, headers=headers)
    return response.content

    def parse_page(content):
    soup = BeautifulSoup(content, "html.parser")
    links = []
    for link in soup.find_all("a"):
    href = link.get("href")
    if href.endswith(file_format):
    links.append(href)
    return links

    def download_file(url, file_name):
    headers = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Safari/537.36"
    }
    response = requests.get(url, headers=headers)
    with open(file_name, "wb") as f:
    f.write(response.content)

    if __name__ == "__main__":
    url = input("请输入要爬取的网页链接：")
    file_format = input("请输入要下载的文件格式（例如：.jpg）：")
    content = download_page(url)
    links = parse_page(content)
    for link in links:
    file_name = link.split("/")[-1]
    print("正在下载：", file_name)
    download_file(link, file_name)</p>
<p>使用Python的psutil庫來檢測設備的CPU、記憶體、硬碟資訊,以下为代码和操作</p>
<p>安装psutil库。使用以下命令安装：
    pip install psutil
    然后，使用以下代码来检测您的设备的硬件配置信息：

    import psutil

    # 获取设备的内存信息
    memory = psutil.virtual_memory()
    print("Total memory:", memory.total)
    print("Available memory:", memory.available)

    # 获取设备的CPU信息
    cpu_count = psutil.cpu_count()
    print("Number of CPU cores:", cpu_count)

    # 获取设备的硬盘信息
    disk = psutil.disk_usage('/')
    print("Total disk space:", disk.total)
    print("Used disk space:", disk.used)</p>
<h2>程式設計語言代碼Java</h2>
<p>作用实现加、减、乘、除的四则运算，以下为代码</p>
<p>import java.util.Scanner;

    public class Calculator {
    public static void main(String[] args) {
    Scanner input = new Scanner(System.in);

    System.out.print("Enter first number: ");
    double num1 = input.nextDouble();

    System.out.print("Enter second number: ");
    double num2 = input.nextDouble();

    System.out.print("Enter operation (+, -, *, /): ");
    char operation = input.next().charAt(0);

    double result;
    switch (operation) {
    case '+':
    result = num1 + num2;
    break;
    case '-':
    result = num1 - num2;
    break;
    case '*':
    result = num1 * num2;
    break;
    case '/':
    if (num2 == 0) {
    System.out.println("Error: Cannot divide by zero.");
    return;
    } else {
    result = num1 / num2;
    }
    break;
    default:
    System.out.println("Error: Invalid operator.");
    return;
    }

    System.out.println(num1 + " " + operation + " " + num2 + " = " + result);
    }
    }</p>

<p>作用實現註冊、登錄、重置密碼，以下为代码</p>
<p>import java.util.HashMap;
    import java.util.Scanner;

    public class UserManager {
    private HashMap<String, String> users = new HashMap<>();

    public void register() {
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter a username: ");
    String username = sc.nextLine();
    if (users.containsKey(username)) {
    System.out.println("Username already exists. Please choose another.");
    return;
    }
    System.out.print("Enter a password: ");
    String password = sc.nextLine();
    users.put(username, password);
    System.out.println("Registration successful.");
    }

    public void login() {
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter a username: ");
    String username = sc.nextLine();
    if (!users.containsKey(username)) {
    System.out.println("Username does not exist.");
    return;
    }
    System.out.print("Enter a password: ");
    String password = sc.nextLine();
    if (!users.get(username).equals(password)) {
    System.out.println("Incorrect password.");
    return;
    }
    System.out.println("Login successful.");
    }

    public void resetPassword() {
    Scanner sc = new Scanner(System.in);
    System.out.print("Enter a username: ");
    String username = sc.nextLine();
    if (!users.containsKey(username)) {
    System.out.println("Username does not exist.");
    return;
    }
    System.out.print("Enter a new password: ");
    String password = sc.nextLine();
    users.put(username, password);
    System.out.println("Password reset successful.");
    }

    public static void main(String[] args) {
    UserManager manager = new UserManager();
    Scanner sc = new Scanner(System.in);
    while (true) {
    System.out.println("1. Register");
    System.out.println("2. Login");
    System.out.println("3. Reset password");
    System.out.println("4. Quit");
    System.out.print("Enter your choice: ");
    int option = sc.nextInt();
    if (option == 1) {
    manager.register();
    } else if (option == 2) {
    manager.login();
    } else if (option == 3) {
    manager.resetPassword();
    } else if (option == 4) {
    break;
    }
    }
    }
    }</p>

<p>作用畫出中華人民共和國的象徵和標誌中華人民共和國國旗，以下为代码</p>
<p>import javax.swing.*;
    import java.awt.geom.*;
    import java.awt.*;

    public class Main extends JPanel {

    public static void main(String[] args) {
    JFrame jFrame = new JFrame("中華人民共和國國旗五星紅旗");
    jFrame.getContentPane().add(new Main(600));
    jFrame.pack();
    jFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    jFrame.setLocationRelativeTo(null);
    jFrame.setVisible(true);
    }

    public static Shape createPentacle(double sx, double sy, double radius, double theta) {
    final double arc = Math.PI / 5;
    final double rad = Math.sin(Math.PI / 10) / Math.sin(3 * Math.PI / 10);
    GeneralPath path = new GeneralPath();
    path.moveTo(1, 0);
    for (int i = 0; i < 5; i++) {
    path.lineTo(rad * Math.cos((1 + 2 * i) * arc), rad * Math.sin((1 + 2 * i) * arc));
    path.lineTo(Math.cos(2 * (i + 1) * arc), Math.sin(2 * (i + 1) * arc));
    }
    path.closePath();
    AffineTransform atf = AffineTransform.getScaleInstance(radius, radius);
    atf.translate(sx / radius, sy / radius);
    atf.rotate(theta);
    return atf.createTransformedShape(path);
    }

    private int width, height;
    private double maxR = 0.15, minR = 0.05;
    private double maxX = 0.25, maxY = 0.25;
    private double[] minX = {0.50, 0.60, 0.60, 0.50};
    private double[] minY = {0.10, 0.20, 0.35, 0.45};

    public Main(int width) {
    this.width = width / 3 * 3;
    this.height = width / 3 * 2;
    setPreferredSize(new Dimension(this.width, this.height));
    }

    @Override
    protected void paintComponent(Graphics g) {
    Graphics2D graphics2D = (Graphics2D) g;

    graphics2D.setPaint(Color.RED);
    graphics2D.fillRect(0, 0, width, height);

    double ox = height * maxX, oy = height * maxY;
    graphics2D.setPaint(Color.YELLOW);
    graphics2D.fill(createPentacle(ox, oy, height * maxR, -Math.PI / 2));

    for (int i = 0; i < 4; i++) {
    double sx = minX[i] * height, sy = minY[i] * height;
    double theta = Math.atan2(oy - sy, ox - sx);
    graphics2D.fill(createPentacle(sx, sy, height * minR, theta));
    }
    }
    }</p>

<p>使用Java語言來獲取系統資訊的方法，以下為代碼</p>
<p>import java.lang.management.ManagementFactory;
    import java.lang.management.OperatingSystemMXBean;
    import java.lang.management.RuntimeMXBean;
    import java.lang.management.MemoryMXBean;
    import java.lang.management.MemoryUsage;

    public class SystemInformation {
    public static void main(String[] args) {

    OperatingSystemMXBean os = ManagementFactory.getOperatingSystemMXBean();
    System.out.println("Operating System: " + os.getName() + " " + os.getVersion());
    System.out.println("Architecture: " + os.getArch());
    System.out.println("Processors: " + os.getAvailableProcessors());

    RuntimeMXBean runtime = ManagementFactory.getRuntimeMXBean();
    System.out.println("Java Version: " + runtime.getVmVersion());

    MemoryMXBean memory = ManagementFactory.getMemoryMXBean();
    MemoryUsage heap = memory.getHeapMemoryUsage();
    System.out.println("Heap Memory Usage: " + heap.getUsed() / 1024 / 1024 + " MB used");
    }
    }</p>



</div>
<script>
    var today = new Date();
    var todayGMT = today.toLocaleString('chinese', { hour12: false, timeZone: 'Asia/Shanghai' });
    var dateTimeParts = todayGMT.split(/\D/); //["2020","4","4","14","32","42"]
    document.write("你進入此網站的時間:" + dateTimeParts[0]+"-"+dateTimeParts[1]+"-"+dateTimeParts[2]+" "+dateTimeParts[3]+":"+dateTimeParts[4]+":"+dateTimeParts[5]);
    setInterval(function(){
        // 每秒更新一次
        var today = new Date();
        var todayGMT = today.toLocaleString('chinese', { hour12: false, timeZone: 'Asia/Shanghai' });
        var dateTimeParts = todayGMT.split(/\D/); //["2020","4","4","14","32","42"]
        document.getElementById("time").innerHTML = dateTimeParts[0]+"-"+dateTimeParts[1]+"-"+dateTimeParts[2]+" "+dateTimeParts[3]+":"+dateTimeParts[4]+":"+dateTimeParts[5];
    }, 1000);
</script>
<p>當前時間<span id="time"></span></p>

</div>

<div>
    Copyright &copy; 2023-MandengWong保留所有權利-MandengWong技術支援,最后更新日期: 2023年2月11日
</div>


</body>
</html>
