<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h2>2 Список всех сотрудников, отсортированных по возрастанию зарплаты</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>position</th>
            <th>salary</th>
        </tr>
        <tr>
            <th>айди</th>
            <th>имя</th>
            <th>дата рождения</th>
            <th>должность</th>
            <th>зарплата</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>

    <h2>3 Сотрудники с зарплатой 400 или id, большим 4</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>position</th>
            <th>salary</th>
        </tr>
        <tr class="subheader-row">
            <th>айди</th>
            <th>имя</th>
            <th>дата рождения</th>
            <th>должность</th>
            <th>зарплата</th>
        </tr>
        @foreach($employeesWithSalary400OrIdGreater4 as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday}}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>

    <h2>4 Сотрудник с id, равным 3</h2>

    <p>ID: {{ $employeeWithId3->id }}</p>
    <p>Имя: {{ $employeeWithId3->name }}</p>
    <p>Дата рождения: {{ $employeeWithId3->birthday }}</p>
    <p>Должность: {{ $employeeWithId3->position }}</p>
    <p>Зарплата: {{ $employeeWithId3->salary }}</p>

    <h2>5 Имя сотрудника с id, равным 5</h2>
    <p>Имя: {{ $employeeNameWithId5 }}</p>

    <h2>6 Сотрудники с зарплатой от 400 до 800 ИЛИ должностью 'программист'</h2>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>position</th>
            <th>salary</th>
        </tr>
        <tr>
            <th>айди</th>
            <th>имя</th>
            <th>дата рождения</th>
            <th>должность</th>
            <th>зарплата</th>
        </tr>
        @foreach($employeesSalary400to800OrProgrammers as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>

    <h2>7 Суммарная зарплата всех работников</h2>
    <p>Сумма: {{ $totalSalary }}</p>

    <h2>8 Суммарная зарплата по должностям</h2>
    <table>
        <tr>
            <th>должность</th>
            <th>суммарная зарплата</th>
        </tr>
        @foreach($salaryByPosition as $position)
        <tr>
            <td>{{ $position->position }}</td>
            <td>{{ $position->total_salary }}</td>
        </tr>
        @endforeach
    </table>

    <h2>9 Работники, у которых день рождения приходится на 25 день месяца</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>position</th>
            <th>salary</th>
        </tr>
        <tr>
            <th>айди</th>
            <th>имя</th>
            <th>дата рождения</th>
            <th>должность</th>
            <th>зарплата</th>
        </tr>
        @foreach($employeesBornOn25th as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>

    <h2>10 Работники, родившиеся в 1990 году</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>position</th>
            <th>salary</th>
        </tr>
        <tr>
            <th>айди</th>
            <th>имя</th>
            <th>дата рождения</th>
            <th>должность</th>
            <th>зарплата</th>
        </tr>
        @foreach($employeesBornIn1990 as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>