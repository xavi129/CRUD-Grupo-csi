// Suggested code may be subject to a license. Learn more: ~LicenseLog:4077213029.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2124945272.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1607258525.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3170469179.
import { Component, OnInit } from '@angular/core';
import { Employee } from 'src/app/employee';
import { DataService } from 'src/app/service/data.service';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-employees',
  templateUrl: './employees.component.html',
  styleUrls: ['./employees.component.css']
})
export class EmployeesComponent implements OnInit {
  employees:any;
  employee = new Employee();

  constructor(private dataService:DataService) { }

  ngOnInit(): void {
    this.getEmployeesData();
  }

  getEmployeesData() {
    this.dataService.getData().subscribe(res => {
      this.employees = res;
    });
  }

  insertData() {
    this.dataService.insertData(this.employee).subscribe(res => {
      this.getEmployeesData();
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Empleado creado con éxito',
        showConfirmButton: false,
        timer: 1500
      })
    });
  }

  deleteData(id:any) {
    this.dataService.deleteData(id).subscribe(res => {
      this.getEmployeesData();
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Empleado eliminado con éxito',
        showConfirmButton: false,
        timer: 1500
      })
    });
  }

}
