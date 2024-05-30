// Suggested code may be subject to a license. Learn more: ~LicenseLog:2591124789.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3344619628.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2551310218.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3320394037.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:2732924926.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:4247036212.
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Employee } from 'src/app/employee';
import { DataService } from 'src/app/service/data.service';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-employee-edit',
  templateUrl: './employee-edit.component.html',
  styleUrls: ['./employee-edit.component.css']
})
export class EmployeeEditComponent implements OnInit {
  id:any;
  data:any;
  employee = new Employee();
  constructor(private route:ActivatedRoute, private dataService: DataService) { }

  ngOnInit(): void {
    // console.log(this.route.snapshot.params['id']);
    this.id = this.route.snapshot.params['id'];
    this.getData();
  }

  getData() {
    this.dataService.getEmployeebyId(this.id).subscribe(res => {
      // console.log(res);
      this.data = res;
      this.employee = this.data;
    });
  }

  updateEmployee() {
    this.dataService.updateData(this.id, this.employee).subscribe(res => {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Se ha guardado',
        showConfirmButton: false,
        timer: 1500
      });
      window.location.href = '/index.html';
    });
  }

}
