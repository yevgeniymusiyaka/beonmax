'use strict';

let money = prompt("Ваш бюджет на месяц", ""),
    time = prompt("Введите дату в формате YYYY-MM-DD", "");


let appData = {
    yourMoney: money,
    timeData: time,
    expenses: {},
    optionalExpenses: {},
    income:[],
    savings: false
}

let moneyPerMonth1 = prompt("Введите обязательную статью расходов в этом месяце", ""),
howMuchMoney1 = prompt("Во сколько обойдется?", ""),
moneyPerMonth2 = prompt("Введите обязательную статью расходов в этом месяце", ""),
howMuchMoney2 = prompt("Во сколько обойдется?", "");

appData.expenses.moneyPerMonth1 = howMuchMoney1;
appData.expenses.moneyPerMonth2 = howMuchMoney2;

let result = appData.yourMoney / 30;

alert(result);

