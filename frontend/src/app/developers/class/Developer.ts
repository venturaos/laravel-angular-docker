interface DateFormat {
    day: number,
    month: number,
    year: number,
}

export class Developer {
    public id;
    public name;
    public gender;
    public age;
    public hobby;
    public date_birth;

    constructor(
        id: number|null = null, 
        name: string|null = null, 
        gender: string|null = null,
        age: number|null = null,
        hobby: string|null = null,
        date_birth: DateFormat|null = null,
    ) {
        this.id = id;
        this.name = name;
        this.gender = gender;
        this.age = age;
        this.hobby = hobby;
        this.date_birth = date_birth;
    }
}
